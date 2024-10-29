@if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
<div class="ms-3 relative">
    <x-dropdown align="right" width="60">
        <x-slot name="trigger">
            <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                    {{ Auth::user()->currentTeam->name }}

                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                    </svg>
                </button>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="w-60">
                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                    {{ __('Team Settings') }}
                </x-dropdown-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                    <x-dropdown-link href="{{ route('teams.create') }}">
                        {{ __('Create New Team') }}
                    </x-dropdown-link>
                @endcan

                <!-- Team Switcher -->
                @if (Auth::user()->allTeams()->count() > 1)
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-switchable-team :team="$team" />
                    @endforeach
                @endif
            </div>
        </x-slot>
    </x-dropdown>
</div>
@endif



///
for the
<!-- Team Management -->
@if (Laravel\Jetstream\Jetstream::hasTeamFeatures())

<div class="border-t border-gray-200"></div>

<div class="block px-4 py-2 text-xs text-gray-400">
    {{ __('Manage Team') }}
</div>

<!-- Team Settings -->
<x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
    :active="request()->routeIs('teams.show')">
    {{ __('Team Settings') }}
</x-responsive-nav-link>

@can('create', Laravel\Jetstream\Jetstream::newTeamModel())
    <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
        {{ __('Create New Team') }}
    </x-responsive-nav-link>
@endcan

<!-- Team Switcher -->
@if (Auth::user()->allTeams()->count() > 1)
    <div class="border-t border-gray-200"></div>

    <div class="block px-4 py-2 text-xs text-gray-400">
        {{ __('Switch Teams') }}
    </div>

    @foreach (Auth::user()->allTeams() as $team)
        <x-switchable-team :team="$team" component="responsive-nav-link" />
    @endforeach
@endif
@endif
