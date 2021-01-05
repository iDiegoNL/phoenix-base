<a href="{{ route('dashboard') }}"
   class="@if(Request::routeIs('dashboard')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    {{-- home --}}
    <svg
        class="@if(Request::routeIs('dashboard')) text-gray-300 @else text-gray-400 group-hover:text-gray-300 @endif mr-3 h-6 w-6"
        xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    Dashboard
</a>

@can('handle driver applications')
    <a href="{{ route('recruitment.index') }}"
       class="@if(Request::routeIs('recruitment.index')) bg-gray-900 text-white @else text-gray-300 hover:bg-gray-700 hover:text-white @endif group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        {{-- inbox --}}
        <svg
            class="@if(Request::routeIs('recruitment.index')) text-gray-300 @else text-gray-400 group-hover:text-gray-300 @endif mr-3 h-6 w-6"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
        </svg>
        Recruitment
    </a>
@endcan
