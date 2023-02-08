<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; {{ config('app.name', 'Laravel').' '.date('Y') }}</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="{{ route('ajuda') }}">Ajuda</a>
            </div>
        </div>
    </div>
</footer>