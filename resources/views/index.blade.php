@extends("layouts.app")
@section("content")
<div class="container px-4 py-5" id="hanging-icons">
  <h2 class="pb-2 border-bottom">Time DashBoard</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="col d-flex align-items-start">
      <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#toggles2"></use>
        </svg>
      </div>
      <div>
        <p>今天是 {{ $today->format('Y-m-d') }}</p>
        <p>今年第 {{ $today->weekOfYear }} 週</p>
        <p>今年第 {{ $today->dayOfYear }} 天</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <div class="icon-square bg-light text-dark d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg class="bi" width="1em" height="1em">
          <use xlink:href="#cpu-fill"></use>
        </svg>
      </div>
      <div>
        <p>今年還剩下 {{ $today->weeksInYear-$today->weekOfYear }} 週</p>
        <p>今年還剩下 {{ $today->daysInYear-$today->dayOfYear }} 天</p>
      </div>
    </div>
  </div>
</div>

@endsection