<x-app-layout>
  <div class="container mx-auto md:px-20 px-4">
    @if (session('status'))    
    <div class="alert mt-10 bg-emerald-100 rounded-lg py-5 px-6 mb-3 text-base text-emerald-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
      {{ session('status') }}
      <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-emerald-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-emerald-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
    @endif
    <div class="flex flex-row justify-between my-10">
      <h1 class="text-black text-xl md:text-3xl font-semibold">{{ $package->name }} <span class="inline-block py-1.5 px-2.5 leading-none text-center bltext-blackspace-nowrap align-baseline bg-emerald-600 text-white rounded">{{ $package->category->name }}</span></h1>
      
      <a href="{{ route('destination.create', $package->id) }}" class="button">Add Destination</a>
      
    </div>
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="border-b">
                <tr>
                  <th scope="col" class=" font-medium text-black px-6 py-4 text-left">
                    #
                  </th>
                  <th scope="col" class=" font-medium text-black px-6 py-4 text-left">
                    Start Time
                  </th>
                  <th scope="col" class=" font-medium text-black px-6 py-4 text-left">
                    Name
                  </th>
                  <th scope="col" class=" font-medium text-black px-6 py-4 text-left hidden md:block">
                    Description
                  </th>
                  <th scope="col" class=" font-medium text-black px-6 py-4 text-left">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @if ($package->category_id == 2)
                  {{-- Group by day --}}
                @foreach ($destinations as $day => $items)
                    <tr class="border-b bg-gray-100">
                        <td colspan="5" class="text-center font-semibold text-xl py-3">
                            Day {{ $day }}
                        </td>
                    </tr>

                    @foreach ($items as $destination)
                        <tr class="border-b">
                            <td class="px-6 pb-4 font-medium text-black">{{ $loop->iteration }}</td>
                            <td class="text-black px-6 py-4">
                                {{ $destination->start_time }}
                            </td>
                            <td class="text-black px-6 py-4">
                                {{ $destination->name }}
                            </td>
                            <td class="text-black px-6 py-4">
                                {{ $destination->description }}
                            </td>
                            <td class="text-black px-6 py-4">
                                <a href="{{ route('destination.edit', $destination->id) }}" class="button">Edit</a>
                                <form action="{{ route('destination.destroy', $destination->id) }}" method="post" class="mt-1">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="inline-block px-6 py-4 bg-red-600 text-white font-medium rounded-lg shadow-md hover:bg-red-700"
                                        onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  @endforeach
                @else
                  @foreach ($destinations as $destination)
                      <tr class="border-b">
                          <td class="px-6 pb-4 font-medium text-black">{{ $loop->iteration }}</td>
                          <td class="text-black px-6 py-4">
                              {{ $destination->start_time }}
                          </td>
                          <td class="text-black px-6 py-4">
                              {{ $destination->name }}
                          </td>
                          <td class="text-black px-6 py-4">
                              {{ $destination->description }}
                          </td>
                          <td class="text-black px-6 py-4">
                              <a href="{{ route('destination.edit', $destination->id) }}" class="button">Edit</a>
                              <form action="{{ route('destination.destroy', $destination->id) }}" method="post" class="mt-1">
                                  @csrf
                                  @method('delete')
                                  <button type="submit"
                                      class="inline-block px-6 py-4 bg-red-600 text-white font-medium rounded-lg shadow-md hover:bg-red-700"
                                      onclick="return confirm('Are you sure?')">
                                      Delete
                                  </button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>