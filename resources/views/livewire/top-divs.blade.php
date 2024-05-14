   
  <script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                var $this = $(this);
                var targetValue = $this.data('target');
                var currentValue = parseInt($this.text(), 10);
                var increment = Math.ceil(targetValue / 150);

                var interval = setInterval(function() {
                    if (currentValue < targetValue) {
                        currentValue += increment;
                        $this.text(currentValue);
                    } else {
                        clearInterval(interval);
                        $this.text(targetValue);
                    }
                }, 50); 
            });
        });
    </script>
<div>
    @php
    use App\Models\User; // Asegúrate de tener el modelo User
    $userCount = User::count();
    $premiumCount = User::where('premium', 1)->count();
    $freeCount = User::where('premium', 0)->count();
    $clientCount = User::where('nivel',3)->count();
@endphp

<div class="row" style="min-height: 200px;max-height:200px;">
    <div class="col-xl-3 col-sm-6">
        <div class="card" style="min-height:150px;">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-success-subtle text-success rounded fs-3xl">
                        <i class="bi bi-activity"></i>
                    </div>
                </div>
                <p class="fs-md text-muted mb-4">Usuarios <br> Totales</p>
                <h4 class="mb-3"><span class="counter-value" data-target="{{ $userCount }}">0</span> </h4>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-sm-6">
        <div class="card" style="min-height: 150px;max-height:150px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-primary-subtle text-primary rounded fs-3xl">
                        <i class="bi bi-box"></i>
                    </div>
                </div>
                <p class="fs-md text-muted mb-4">Usuarios <br> Premium</p>
                <h4 class="mb-3"><span class="counter-value" data-target="{{ $premiumCount }}">0</span></h4>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-sm-6">
        <div class="card" style="min-height: 150px;max-height:150px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-info-subtle text-info rounded fs-3xl">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <p class="fs-md text-muted mb-4">Usuarios <br> sin subscripción</p>
                <h4 class="mb-3"><span class="counter-value" data-target="{{ $freeCount }}">59</span></h4>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card" style="min-height: 150px;max-height:150px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-secondary text-white rounded fs-3xl">
                        <i class="bi bi-optical-audio"></i>
                    </div>
                </div>
                <p class="fs-md text-muted mb-4">Clientes <br> Totales</p>
                <h4 class="mb-3"><span class="counter-value" data-target="{{ $clientCount }}">0</span></h4>
            </div>
        </div>
    </div>
</div>