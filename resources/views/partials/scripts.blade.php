<!-- Scroll to Top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

   <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--!<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> -->
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar sesión</a>
            <form id="logout-form"
      action="{{ route('logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery -->
<script src="{{ asset('theme/vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('theme/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('theme/vendor/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('theme/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('theme/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('theme/js/demo/chart-bar-demo.js') }}"></script>

@stack('scripts')