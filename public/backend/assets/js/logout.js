function confirmLogout() {
    if (confirm('Are you sure you want to log out?')) {
        document.getElementById('logout-form').submit();
    }
}
