@extends("frontend.layouts.master")
@section("title","Chính sách bảo mật")
@section("content")
<section class="introduce">
    <img src="{{asset('images/frontend/info/info.jpg')}}" alt="" class="introduce__background">
    <div class="container">
        <div class="introduce__main">
            <div class="introduce__content">
                <h2 class="heading-lv-2 introduce__heading">CHÍNH SÁCH BẢO MẬT THÔNG TIN TISU HOME</h2>

                <div class="introduce__group">
                    <h3 class="introduce__title">1. Phạm vi áp dụng</h3>
                    <p class="introduce__desc">
                    <p>Chính sách này quy định việc thu thập, sử dụng và bảo vệ thông tin cá nhân khi khách hàng:</p>
                    <ul>
                        <li>Đăng ký tài khoản trên website <span class="web"> www.tisuhome.com</span> hoặc ứng dụng
                            <b>Tisu Home</b>.
                        </li>
                        <li>Đặt hàng, sử dụng dịch vụ giao nhận.</li>
                        <li>Tương tác qua hotline 0961 962 423, email hoặc mạng xã hội chính thức.</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">2. Thông tin thu thập</h3>
                    <p class="introduce__desc">
                    <p>Tisu Home có thể thu thập:</p>
                    <ul>
                        <li><span class="introduce__bolder">Thông tin cá nhân: </span> Họ tên, số điện thoại, email, địa
                            chỉ giao hàng.</li>
                        <li><span class="introduce__bolder">Thông tin giao dịch: </span> Thông tin giao dịch:</li>
                        <li><span class="introduce__bolder">Dữ liệu tự động: </span> Địa chỉ IP, cookie, thiết bị truy
                            cập</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">3. Mục đích sử dụng</h3>
                    <p class="introduce__desc">
                    <p>Thông tin được dùng để:</p>
                    <ul>
                        <li>Xử lý đơn hàng và giao dịch.</li>
                        <li>Hỗ trợ khách hàng, giải quyết khiếu nại.</li>
                        <li>Gửi ưu đãi, khảo sát (nếu khách hàng đăng ký nhận).</li>
                        <li>Nâng cao trải nghiệm dịch vụ và tuân thủ pháp luật.</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">4. Đối tượng tiếp cận</h3>
                    <p class="introduce__desc">
                    <ul>
                        <li> để giao hàng.</li>
                        <li><span class="introduce__bolder">Đối tác thanh toán</span> (ngân hàng, ví điện tử).</li>
                        <li><span class="introduce__bolder">Cơ quan nhà nước</span> khi có yêu cầu hợp pháp.</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">5. Biện pháp bảo mật</h3>
                    <p class="introduce__desc">
                    <ul>
                        <li>Mã hóa dữ liệu nhạy cảm bằng giao thức<span class="introduce__bolder">SSL</span>.</li>
                        <li>Giới hạn quyền truy cập thông tin nội bộ.</li>
                        <li>Lưu trữ trên hệ thống máy chủ an toàn.</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">6. Quyền của khách hàng</h3>
                    <p class="introduce__desc">
                    <p>Khách hàng có quyền:</p>
                    <ul>
                        <li>Truy cập, chỉnh sửa thông tin cá nhân qua tài khoản.</li>
                        <li>Yêu cầu ngừng sử dụng dữ liệu cho mục đích tiếp thị.</li>
                        <li>Gửi yêu cầu xóa tài khoản qua email <span class="web">support@tisuhome.com</span>.</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">7. Liên hệ</h3>
                    <p class="introduce__desc">
                    <p>Mọi thắc mắc vui lòng liên hệ:</p>
                    <ul>
                        <li><span class="introduce__bolder">Địa chỉ: </span>381/20/10 Tân Hoà Đông, Phường Bình Trị
                            Đông, TP. HCM.</li>
                        <li><span class="introduce__bolder">Hotline: </span>0961 962 423.</li>
                        <li><span class="introduce__bolder">Email: </span>
                            <span class="web">privacy@tisuhome.com</span>.
                        </li>
                    </ul>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection