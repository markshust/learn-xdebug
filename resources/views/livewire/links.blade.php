<div>
    <p class="mb-4">
        Not sure what you're looking for? Use our filter to help find something to fit your learning needs.
        @if ($showFilter)
            <a href="#" wire:click="hide">Hide Filter</a>
        @else
            <a href="#" wire:click="show">Show Filter</a>
        @endif
    </p>

    @if ($showFilter)
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Operating System
                </label>
            </div>
            <div class="md:w-2/3">
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model='os'
                    >
                        <option value="">ALL</option>
                        <option value="macos">macOS</option>
                        <option value="windows">Windows</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Hosting Tool
                </label>
            </div>
            <div class="md:w-2/3">
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model='hosting'
                    >
                        <option value="">ALL</option>
                        <option value="docker">Docker</option>
                        <option value="homestead">Homestead</option>
                        <option value="valet">Valet</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4" for="inline-full-name">
                    IDE/Editor
                </label>
            </div>
            <div class="md:w-2/3">
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model='ide'
                    >
                        <option value="">ALL</option>
                        <option value="phpstorm">PHPStorm</option>
                        <option value="sublime">Sublime</option>
                        <option value="vscode">VS Code</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($groupedLinks)
        @foreach ($groupedLinks as $key => $group)
            <h2 class="font-bold text-lg md:text-2xl mb-2 mt-10 md:mt-6" id="{{ str_replace(' ', '-', strtolower($key)) }}">
                {{ $key }}
            </h2>

            <ul class="list-disc ml-6">
                @foreach ($group as $link)
                    <li class="mb-2">
                        <a href="{{ $link['url'] }}">{{ $link['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    @else
        Sorry, we have no results to match your search.
    @endif

</div>
