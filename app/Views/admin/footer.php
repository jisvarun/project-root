        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const adminToggle = document.querySelector(".admin-sidebar-toggle");
        const adminClose = document.querySelector(".admin-sidebar-close");
        const adminBackdrop = document.querySelector(".admin-sidebar-backdrop");

        function closeAdminSidebar() {
            document.body.classList.remove("admin-sidebar-open");
        }

        adminToggle?.addEventListener("click", () => {
            document.body.classList.add("admin-sidebar-open");
        });

        adminClose?.addEventListener("click", closeAdminSidebar);
        adminBackdrop?.addEventListener("click", closeAdminSidebar);

        window.addEventListener("resize", () => {
            if (window.innerWidth > 991) {
                closeAdminSidebar();
            }
        });
    </script>
</body>
</html>
