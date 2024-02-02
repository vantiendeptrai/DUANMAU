<?php
    if(is_array($dm)){
         extract($dm);
    }
?>

<div class="">
    <div>
        <h1 class="text-center mt-10 text-2xl font-medium">CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <form class="max-w-sm mx-auto" action="index.php?act=updatedm" method="post">
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-900 text-xl">Mã loại
            </label>
            <input type="text" name="maloai"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                >
        </div>
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-900 text-xl">Tên loại 
            </label>
            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
            <input type="submit" name="capnhat" value="Cập nhật"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <input type="reset" name="" value="Nhập lại"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <a href="index.php?act=lisdm"><input
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>

</div>
<!-- 
<form class="max-w-sm mx-auto" action="index.php?act=adddm" method="post">
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-900 text-xl	">Mã loại</label>
        <input type="text" name="maloai" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="">
    </div>
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-900 text-xl	">Tên loại</label>
        <input type="text" name="tenloai" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
    </div>
    <div>
        <input type="submit" name="themmoi" value="Thêm mới" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <input type="reset" name="" value="Nhập lại" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="index.php?act=lisdm">
            <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" value="Danh sách">
        </a>
    </div>
   
</form> -->
