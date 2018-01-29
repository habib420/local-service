  @include('admin.includes.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      @yield('container')
    </section>
  </div>
  {{-- End Content Wrapper --}}

  @include('admin.includes.footer')