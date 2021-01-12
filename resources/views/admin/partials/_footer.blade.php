<footer class="main-footer" onload="display_ct()">
    <div class="float-right d-none d-sm-inline">
        <span id="currentTime"></span>
    </div>
    <strong>Copyright &copy; 2020-{{ date('Y') }} <a target="_blank" href="{{ $global_contact->website_link ?? route('front.home.index') }}">{{ $global_site->name ?? 'Site Title' }}</a>.</strong> All rights reserved.
</footer>
