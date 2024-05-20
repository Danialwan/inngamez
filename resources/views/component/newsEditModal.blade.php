 <!-- The Modal -->
 <div id="editImageModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close closeImage">&times;</span>
        <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ '/admin/contact/Image' }}">
            @csrf
            @method('PUT')
            <b class="title text-center flex justify-self-center">Update News Image:</b>
            <div class="flex flex-col items-start w-full">
                <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Image :</label>
                <div class="oldImage">tes</div>
                <input class="mt-2" type="file" id="myfile" name="myfile"><br><br>
                {{-- <input type="submit"> --}}
                {{-- <input type="text" name="contact" id="contact" autocomplete="given-name"
                    class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="" required> --}}
                <div class="flex w-full justify-between">
                    <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                        sesuai!</p>
                    <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

 <!-- The Modal -->
 <div id="editTitleModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close closeTitle">&times;</span>
        <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ '/admin/contact/Title' }}">
            @csrf
            @method('PUT')
            <b class="title text-center flex justify-self-center">Update News Title:</b>
            <div class="flex flex-col items-start w-full">
                <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">
                    Title :</label>
                <input type="text" name="contact" id="contact" autocomplete="given-name"
                    class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="" required>
                <div class="flex w-full justify-between mt-4">
                    <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                        sesuai!</p>
                    <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

 <!-- The Modal -->
 <div id="editBodyModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close closeBody">&times;</span>
        <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ '/admin/contact/Body' }}">
            @csrf
            @method('PUT')
            <b class="title text-center flex justify-self-center">Update News Body:</b>
            <div class="flex flex-col items-start w-full">
                <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">
                    News :</label>
                <input type="text" name="contact" id="contact" autocomplete="given-name"
                    class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="" required>
                <div class="flex w-full justify-between mt-4">
                    <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                        sesuai!</p>
                    <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
