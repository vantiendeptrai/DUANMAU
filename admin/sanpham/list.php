<div class="">
    <div>
        <h1>Danh sách loại hàng</h1>
    </div>
    <!-- component -->
    <div class="table w-full p-2">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select class="mb-2 font-medium text-gray-900 text-xl" name="iddm">
                <option value="0" select>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="Go">
        </form>
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="border-r p-2">
                        <input type="checkbox">
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Mã loại

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Tên sản phẩm

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Hình

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Giá sản phẩm

                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Lượt xem

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
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' width='80px' height='80px'>";
                } else {
                    $hinh = "no photo";
                }


                echo '<tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">
                    <input type="checkbox">
                </td>
                <td class="p-2 border-r">' . $id . '</td>
                <td class="p-2 border-r">' . $name . '</td>
                <td class="p-2 border-r">' . $hinh . '</td>
                <td class="p-2 border-r">' . $price . '</td>
                <td class="p-2 border-r">' . $luotxem . '</td>
                <td>
                    <a href="' . $suasp . '" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Sửa</a>
                    <a href="' . $xoasp . '" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Xóa</a>
                </td>
            </tr>';
            }
            ?>

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
            <a href="index.php?act=adddm"> <input type="button" value="Nhập thêm"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></a>
            <!-- <a href="index.php?act=lisdm"><input
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" value="Danh sách"></a> -->
        </div>
    </div>
</div>