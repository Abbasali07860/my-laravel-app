<aside id="sidebar" class="sidebar collapsed">
    <nav>
        <ul>
            <li><a href="{{ route('dashboard')}}"><i class="fas fa-home"></i></a></li>
            <li><a href="#"><i class="fas fa-book-open"></i></a></li>
            <li><a href="#"><i class="fas fa-briefcase"></i></a></li>
            <li><a href="#"><i class="fas fa-users"></i></a></li>
        </ul>
    </nav>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('expanded');
    }
</script>
