<x-app-layout>
    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-blue-400 rounded">
                            <p class="text-white">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="text-3xl font-bold">Order</h3>
                    <div class="flex-1">
                        <a>____________________________________________________________________________________________________________________________________________</a>
                        <br> <br> 
                        <form action="/orderplace" method="POST">
                            @csrf
                       <center> <h3 class="text-l font-bold text-black">กรอกข้อมูลที่ต้องการจัดส่ง</h3>
                            <br>
                            <div class="form-group">
                                <h2>ผู้รับ</h2>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="ชื่อ-นามสกุล">
                            </div><br>
                            <div class="form-group">
                                <h2>ที่อยู่</h2>
                                <textarea name="address" placeholder="ที่อยู่ที่ต้องการจัดส่ง" class="form-control"></textarea>
                            </div><br>
                            <div class="form-group">
                                <h2>โทร</h2>
                                <input type="text" name="tel" class="form-control" id="exampleInputtel" placeholder="เบอร์โทรศัพท์">
                            </div><br><br>
                            
                            <div class="form-group">
                                <label class="text-l font-bold text-gray-900"> เลือกวิธีการชำระเงิน</label><br><br>
                                <input type="radio" value="เก็บเงินปลายทาง" name="payment"><span> เก็บเงินปลายทาง</span><br><br>
                                <input type="radio" value="QR PromptPay" name="payment"><span> QR PromptPay</span><br><br>
                                <input type="radio" value="Mobile Banking" name="payment"><span> Mobile Banking</span><br><br>
                            </div> <br>

                            <form action="{{ route('myorders') }}" method="POST">
                                @csrf
                                <button class="px-6 py-2 text-sm  rounded shadow text-white bg-blue-800">Confirm</button>
                            </form>

                          
                        </form></center>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>