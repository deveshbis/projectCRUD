<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larave CRUD</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h2 class='text-5xl text-center font-extrabold underline'>Laravel CRUD</h2>
    <div class="font-[sans-serif] mt-10">
        <div class="bg-gradient-to-r from-blue-700 to-blue-300 w-full h-36"></div>
        <div class="-mt-20 mb-6 px-4">
            <div class="mx-auto max-w-6xl shadow-lg p-8 relative bg-white rounded-lg">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <h3 class="tab text-blue-600 font-bold text-[15px] py-2.5 px-5 border-b-2 border-blue-600 cursor-pointer">
                        Edit Product</h3>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a href="/"
                            class="bg-white text-center cursor-pointer py-2.5 min-w-[140px] shadow-xl shadow-blue-200 text-black text-sm tracking-wider font-medium outline-none border border-blue-600 active:shadow-inner">Back to Home</a>
                    </div>
                </div>

                <form method="POST" action="{{route('product-update')}}" class="mt-8 space-y-3">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}"/>
                    <div>
                        <label for="name" class="font-bold">Product Name</label>
                        <input type='text' placeholder='Product Name' name="name" value="{{$product->name}}"
                            class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#007bff]" />
                        @error('name')
                        <div class="alert alert-danger text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="font-bold">Price</label>
                        <input type='text' placeholder='Price' name="price" value="{{$product->price}}"
                            class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#007bff]" />
                        @error('price')
                        <div class="alert alert-danger text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="font-bold">Quantity</label>
                        <input type='number' placeholder='Quantity.' name="quantity" value="{{$product->quantity}}"
                            class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#007bff]" />
                        @error('quantity')
                        <div class="alert alert-danger text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- <div> 
                        <textarea placeholder='description' rows="6" name="description"
                            class="col-span-full w-full rounded-lg px-4 border border-gray-300 text-sm pt-3 outline-[#007bff]">
                            @error('description')
                            <div class="alert alert-danger text-red-600">{{ $message }}</div>
                            @enderror
                        </textarea>

                    </div> -->

                    <button type="submit"
                        class="px-5 py-2.5 rounded-lg text-sm tracking-wider font-medium border border-purple-700 outline-none bg-transparent hover:bg-purple-700 text-purple-700 hover:text-white transition-all duration-300">Update</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>