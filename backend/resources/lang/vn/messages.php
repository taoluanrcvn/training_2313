<?php
return [
    'user' => [
        'locked' => 'Tài khoản của bạn đã bị khóa',
        'deleted' => 'Tài khoản của đã bị xóa',
        'required' => 'Chưa nhập tên',
        'min_length_name' => 'Tên phải dài hơn 5 ký tự',
        'not_exist' => 'Người dùng không tồn tại!',
        'not_permission_lock' => 'Người dùng này không được khóa',
        'not_permission_unlock' => 'Người dùng này không được mở khóa',
        'not_permission' => 'Bạn không có quyên để thực hiện tính năng này!',
        'not_permission_delete' => 'Người dùng này không được xóa!',
    ],
    'email' => [
        'required' => 'E-mail không được để trống!',
        'not_exist' => 'E-mail không tồn tại!',
        'malformed' => 'E-mail không đúng định dạng',
        'exist' =>  'E-mail đã tồn tại!'
    ],
    'password' => [
        'fail' => 'Mật khẩu không đúng!',
        'min' => 'Mật khẩu phải hơn 5 ký tự',
        'required' => 'Mật khẩu không được để trống'
    ],
    'password_confirm' => [
        'required' => 'Chưa nhập mật khẩu xác nhận',
        'mismatched' => 'Mật khẩu không khớp'
    ],
    'auth' => [
        'unauthorized' => 'Không được phép tạo token'
    ],
    'role' => [
        'not_permission' => 'Bạn không có quyền thực hiện tính năng này'
    ],
    'is_active' => [
        'required' => 'Chưa chọn trạng thái'
    ],
    'group_role' => [
        'required' => 'Chưa chọn nhóm',
        'not_permission' => 'Bạn không được thêm người dùng ở nhóm này'
    ],
    'attributes' => [
        'customer_name' => 'Tên khách hàng',
        'email' => 'Địa chỉ Email',
        'tel_num' => 'Số điện thoại',
        'address' => 'Địa chỉ',
        'is_active' => 'Trạng thái',
        'product_name' => 'Tên sản phẩm',
        'product_price' => 'Giá sản phẩm',
        'is_sales' => 'Trạng thái',
        'inventory' => 'Số lượng',
        'product_image' => 'Hình ảnh',
        'description' => 'Mô tả'
    ],
    'validate' => [
        'required' => ':attribute không được trống',
        'min' => ':attribute không được ngắn hơn :min',
        'numeric' => ':attribute phải là số',
        'max' => ':attribute không được lớn hơn :max',
        'image' => 'Hình ảnh chỉ hỗ trợ đuôi .jpeg/jpg/png'
    ],
    'status_query' => [
        'update_success' => 'Cập nhật thành công',
        'update_fail' => 'Cập nhật thất bại',
        'add_fail' => 'Thêm thất bại'
    ],
    'upload_error' => 'Upload thất bại'
];
