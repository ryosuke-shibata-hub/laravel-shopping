@extends('layouts.app')

@section('content')
<div class="w-4/5 mx-auto">
    <h1 class="pt-12 mb-8 text-5xl font-bold text-gray-800">
        Shopping Cart
    </h1>

    <hr class="border-gray-300 border-1">
</div>

<div class="flex flex-col w-4/5 mx-auto">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Name
                        </th>

                        <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Details
                        </th>

                        <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Price
                        </th>

                        <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Quantity
                        </th>

                        <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Total
                        </th>

                        <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase">
                            Delete
                        </th>
                    </tr>
                </thead>
                @if(session('cartItems'))
                    @foreach(session('cartItems') as $key => $value)
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img
                                                class="w-10 h-10 rounded-full"
                                                src="{{ asset($value['image_path']) }}"
                                                alt="{{ asset($value['name']) }}">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $value['name'] }}
                                            </div>

                                            <div class="text-sm font-medium text-gray-400">
                                                {{ $value['brand'] }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $value['details'] }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        $ {{ $value['price'] }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    <select name="quantity" id="quantity" value="{{ $value['quantity'] }}">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    $ {{ $value['quantity'] * $value['price'] }}
                                </div>
                                </td>

                                <td class="px-6 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route('deleteFromCart', $key) }}" role="button" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                    @else
                    <td align="left" colspan="3">
                        <p class="px-4 py-6 text-xl font-bold text-black">
                            Shopping Cart is Empty.
                        </p>
                    </td>
                @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
