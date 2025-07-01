<?php

return [
    'danh_mucs' => [
        [
            'ten_danh_muc' => 'Cà Phê',
            'mo_ta' => 'Các loại cà phê nguyên chất'
        ],
        [
            'ten_danh_muc' => 'Trà',
            'mo_ta' => 'Các loại trà truyền thống và hiện đại'
        ],
        [
            'ten_danh_muc' => 'Bánh Ngọt',
            'mo_ta' => 'Bánh ăn kèm cà phê'
        ],
        [
            'ten_danh_muc' => 'Đồ Uống Đá Xay',
            'mo_ta' => 'Các loại đá xay mát lạnh'
        ]
    ],

    'khach_hangs' => [
        [
            'ten_khach_hang' => 'Nguyễn Văn An',
            'email' => 'nguyenvana@gmail.com',
            'sdt' => 912345678,
            'level' => 'Vàng',
            'diem' => 150
        ],
        [
            'ten_khach_hang' => 'Trần Thị Bình',
            'email' => 'tranthibinh@yahoo.com',
            'sdt' => 987654321,
            'level' => 'Bạc',
            'diem' => 75
        ],
        [
            'ten_khach_hang' => 'Lê Hoàng Công',
            'email' => 'lehoangcong@gmail.com',
            'sdt' => 912121212,
            'level' => 'Đồng',
            'diem' => 30
        ]
    ],

    'san_phams' => [
        [
            'ten_san_pham' => 'Cà Phê Đen',
            'mo_ta' => 'Cà phê đen truyền thống',
            'danh_muc_id' => 1,
            'do_rang' => 'Dark',
            'nguon_goc' => 'Việt Nam',
            'huong_vi' => 'Đậm đà, vị đắng',
            'hinh' => 'ca-phe-den.jpg',
            'trang_thai' => 'Còn Hàng'
        ],
        [
            'ten_san_pham' => 'Latte',
            'mo_ta' => 'Cà phê sữa Ý',
            'danh_muc_id' => 1,
            'do_rang' => 'Medium',
            'nguon_goc' => 'Italia',
            'huong_vi' => 'Béo ngậy, vị nhẹ',
            'hinh' => 'latte.jpg',
            'trang_thai' => 'Còn Hàng'
        ],
        [
            'ten_san_pham' => 'Trà Đào',
            'mo_ta' => 'Trà đào cam sả',
            'danh_muc_id' => 2,
            'do_rang' => 'Light',
            'nguon_goc' => 'Đài Loan',
            'huong_vi' => 'Ngọt thanh, hương đào',
            'hinh' => 'tra-dao.jpg',
            'trang_thai' => 'Còn Hàng'
        ],
        [
            'ten_san_pham' => 'Matcha Đá Xay',
            'mo_ta' => 'Matcha đá xay kem tươi',
            'danh_muc_id' => 4,
            'do_rang' => 'Light',
            'nguon_goc' => 'Nhật Bản',
            'huong_vi' => 'Vị trà xanh đậm đà',
            'hinh' => 'matcha-da-xay.jpg',
            'trang_thai' => 'Còn Hàng'
        ],
        [
            'ten_san_pham' => 'Tiramisu',
            'mo_ta' => 'Bánh tiramisu Ý',
            'danh_muc_id' => 3,
            'do_rang' => 'Medium',
            'nguon_goc' => 'Italia',
            'huong_vi' => 'Cà phê, cacao',
            'hinh' => 'tiramisu.jpg',
            'trang_thai' => 'Còn Hàng'
        ]
    ],

    'ton_khos' => [
        [
            'san_pham_id' => 1,
            'so_luong_con_lai' => 50
        ],
        [
            'san_pham_id' => 2,
            'so_luong_con_lai' => 30
        ],
        [
            'san_pham_id' => 3,
            'so_luong_con_lai' => 40
        ],
        [
            'san_pham_id' => 4,
            'so_luong_con_lai' => 25
        ],
        [
            'san_pham_id' => 5,
            'so_luong_con_lai' => 15
        ]
    ],

    'nhan_viens' => [
        [
            'ten_nhan_vien' => 'Phạm Văn Đức',
            'vai_tro' => 'Quản Lý',
            'email' => 'phamduc@coffeeshop.com',
            'sdt' => 912000001
        ],
        [
            'ten_nhan_vien' => 'Nguyễn Thị Hương',
            'vai_tro' => 'Barista',
            'email' => 'nguyenthihuong@coffeeshop.com',
            'sdt' => 912000002
        ],
        [
            'ten_nhan_vien' => 'Trần Minh Tuấn',
            'vai_tro' => 'Nhân Viên Thu Ngân',
            'email' => 'tranminhtuan@coffeeshop.com',
            'sdt' => 912000003
        ]
    ],

    'don_hangs' => [
        [
            'khach_hang_id' => 1,
            'thoi_gian' => '2025-06-30 10:15:00',
            'tong_tien' => 120000,
            'trang_thai' => 'Đã Xong',
            'phuong_thuc_thanh_toan' => 'Tiền Mặt',
            'ghi_chu' => 'Thêm ít đá'
        ],
        [
            'khach_hang_id' => 2,
            'thoi_gian' => '2025-06-30 11:30:00',
            'tong_tien' => 85000,
            'trang_thai' => 'Đang Làm',
            'phuong_thuc_thanh_toan' => 'Chuyển Khoản',
            'ghi_chu' => 'Yêu cầu ấn nóng'
        ],
        [
            'khach_hang_id' => 3,
            'thoi_gian' => '2025-06-30 14:45:00',
            'tong_tien' => 150000,
            'trang_thai' => 'Đã Hủy',
            'phuong_thuc_thanh_toan' => 'Tiền Mặt',
            'ghi_chu' => 'Khách không đến lấy'
        ]
    ],

    'chi_tiet_don_hangs' => [
        [
            'don_hang_id' => 1,
            'san_pham_id' => 1,
            'so_luong' => 2,
            'don_gia' => 25000,
            'tong_tien' => 50000
        ],
        [
            'don_hang_id' => 1,
            'san_pham_id' => 3,
            'so_luong' => 1,
            'don_gia' => 35000,
            'tong_tien' => 35000
        ],
        [
            'don_hang_id' => 1,
            'san_pham_id' => 5,
            'so_luong' => 1,
            'don_gia' => 35000,
            'tong_tien' => 35000
        ],
        [
            'don_hang_id' => 2,
            'san_pham_id' => 2,
            'so_luong' => 1,
            'don_gia' => 45000,
            'tong_tien' => 45000
        ],
        [
            'don_hang_id' => 2,
            'san_pham_id' => 4,
            'so_luong' => 1,
            'don_gia' => 40000,
            'tong_tien' => 40000
        ],
        [
            'don_hang_id' => 3,
            'san_pham_id' => 2,
            'so_luong' => 2,
            'don_gia' => 45000,
            'tong_tien' => 90000
        ],
        [
            'don_hang_id' => 3,
            'san_pham_id' => 4,
            'so_luong' => 1,
            'don_gia' => 40000,
            'tong_tien' => 40000
        ],
        [
            'don_hang_id' => 3,
            'san_pham_id' => 5,
            'so_luong' => 1,
            'don_gia' => 35000,
            'tong_tien' => 35000
        ]
    ],

    'nha_cung_caps' => [
        [
            'ten_cung_cap' => 'Công Ty Cà Phê Nguyên Chất',
            'nguoi_lien_he' => 'Lê Văn Tâm',
            'email' => 'cungcapcaphe@nguyenchat.com',
            'sdt' => 912300001,
            'dia_chi' => '123 Đường Cà Phê, Q.1, TP.HCM'
        ],
        [
            'ten_cung_cap' => 'Trà & Nguyên Liệu Á Đông',
            'nguoi_lien_he' => 'Trần Thị Mai',
            'email' => 'tralieu@adong.com',
            'sdt' => 912300002,
            'dia_chi' => '456 Đường Trà, Q.3, TP.HCM'
        ],
        [
            'ten_cung_cap' => 'Bánh Ngọt Nhập Khẩu',
            'nguoi_lien_he' => 'Nguyễn Hồng Nhung',
            'email' => 'banhngot@nhapkhau.com',
            'sdt' => 912300003,
            'dia_chi' => '789 Đường Bánh, Q.5, TP.HCM'
        ]
    ]
];
