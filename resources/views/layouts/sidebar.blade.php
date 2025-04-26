<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="{{ route('dashboard') }}" class="menu-item"><i class="fas fa-home"></i> <span>Dashboard</span></a>
    <a href="#" class="menu-item"><i class="fas fa-book"></i> <span>Products</span></a>
    <a href="#" class="menu-item"><i class="fas fa-shopping-cart"></i> <span>Orders</span></a>
    <a href="#" class="menu-item"><i class="fas fa-credit-card"></i> <span>Payments</span></a>
    <a href="#" class="menu-item"><i class="fas fa-cog"></i> <span>Settings</span></a>
</div>

<script>
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('collapsed');
}
</script>

</body>
