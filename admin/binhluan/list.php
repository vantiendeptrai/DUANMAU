<div class="">
    <div>
        <h1>Danh sách tài khoản</h1>
    </div>
    <!-- component -->
    <div class="table w-full p-2">
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="border-r p-2">
                        <input type="checkbox">
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            ID

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                           Nội dung bình luận

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            IdUser

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                           Idpro

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Ngày bình luận

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Action

                        </div>
                    </th>
                </tr>
            </thead>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                // $suabl="index.php?act=suabl&id=".$id;
                $xoabl="index.php?act=xoabl&id=".$id;
                echo '<tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">
                    <input type="checkbox">
                </td>
                <td class="p-2 border-r">'.$id.'</td>
                <td class="p-2 border-r">'.$noidung.'</td>
                <td class="p-2 border-r">'.$iduser.'</td>
                <td class="p-2 border-r">'.$idpro.'</td>
                <td class="p-2 border-r">'.$ngaybinhluan.'</td>
                <td>
                  
                    <a href="'.$xoabl.'" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Xóa</a>
                </td>
            </tr>';
            }
            ?>



  <!-- <a href="'.$suabl.'" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Sửa</a> -->





            <!-- <tbody>
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">john@gmail.com</td>
                    <td class="p-2 border-r">Sydney, Australia</td>
                    <td>
                        <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                        <a href="#" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                    </td>
                </tr>
            </tbody> -->
        </table>
        <div class="mt-10">
            <input type="button" value="Chọn tất cả"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <input type="button" value="Bỏ chọn tất cả"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <input type="button" value="Xóa các mục đã chọn"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

        </div>
    </div>
</div>