<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function loginForm(): string
    {
        return view('login', [
            'title' => 'Login | Riverview College',
            'active' => '',
        ]);
    }

    public function registerForm(): string
    {
        return view('register', [
            'title' => 'Register | Riverview College',
            'active' => '',
        ]);
    }

    public function register()
    {
        $rules = [
            'full_name' => 'required|min_length[3]|max_length[150]',
            'phone' => 'permit_empty|max_length[30]',
            'email' => 'required|valid_email|max_length[190]|is_unique[users.email]',
            'course_interest' => 'permit_empty|max_length[120]',
            'password' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $userId = $userModel->insert([
            'full_name' => $this->request->getPost('full_name'),
            'phone' => $this->request->getPost('phone'),
            'email' => strtolower((string) $this->request->getPost('email')),
            'course_interest' => $this->request->getPost('course_interest'),
            'password_hash' => password_hash((string) $this->request->getPost('password'), PASSWORD_BCRYPT),
            'role' => 'student',
        ]);

        $this->setUserSession($userModel->find($userId));

        return redirect()->to(url_to('admin.dashboard'))->with('success', 'Registration completed successfully.');
    }

    public function login()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $user = $userModel->where('email', strtolower((string) $this->request->getPost('email')))->first();

        if (! $user || ! password_verify((string) $this->request->getPost('password'), $user['password_hash'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        $this->setUserSession($user);

        return redirect()->to(url_to('admin.dashboard'))->with('success', 'Logged in successfully.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(url_to('login'))->with('success', 'Logged out successfully.');
    }

    private function setUserSession(array $user): void
    {
        session()->set([
            'isLoggedIn' => true,
            'user_id' => $user['id'],
            'user_name' => $user['full_name'],
            'user_email' => $user['email'],
            'user_role' => $user['role'],
        ]);
    }
}
