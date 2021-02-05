@extends('shopify-app::layouts.default')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                Dashboard     {{--<p>You are: {{ Auth::user()->name }}</p>--}}
            </h1>
        </div>
    </header>
    <main>
        @include('partials.active_modal')
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                {{-- call commonent view--}}
                <x-status type="positive" title="Today's wishists" number="32" growth="9"/>
                <x-status type="negative" title="Yesterday's wislists" number="20" growth="20"/>
                <x-status type="normal" title="Total wislists" number="430" growth="0"/>
            </div>
        </div>
    </main>
    <!-- Main content -->

@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Dashboard',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
        
        function setupTheme() {
            setTimeout(function () {
                alert('Theme confirmed');
            }, 3000);

        }
    </script>
@endsection
