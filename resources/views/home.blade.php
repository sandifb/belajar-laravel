@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Chart's container -->
                        <div id="chart" style="height: 300px;"></div>

                        <div id="chartPenerimaan" style="height: 300px;"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const chart = new Chartisan({
            el: '#chart',
            url: "@chart('sample_chart')",
            hooks: new ChartisanHooks()
                .title('Penerimaan Per KPP')
                .legend()
                .colors('red')
                .tooltip(),
        });


        const chartPenerimaan = new Chartisan({
            el: '#chartPenerimaan',
            url: "@chart('chart_penerimaan')",
            hooks: new ChartisanHooks()
                .title('Penerimaan Per KPP')
                .legend()
                .axis(false)
                .tooltip()
                .datasets('pie'),
        });
    </script>
@endsection
