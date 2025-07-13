@extends("frontend.layouts.master")
@section("title","Giới thiệu")
@section("content")
<section class="introduce">
    <img src="{{asset('images/frontend/info/info.jpg')}}" alt="" class="introduce__background">
    <div class="container">
        <div class="introduce__main">
            <div class="introduce__content">
                <h2 class="heading-lv-2 introduce__heading">Tiệm Cà Phê Tisu – Nơi Hương Ký Ức Lên Men Từ Năm 2005</h2>
                <div class="introduce__group">
                    <h3 class="introduce__title">Câu Chuyện Thành Lập</h3>
                    <p class="introduce__desc">Năm 2005, giữa con phố nhỏ rợp bóng cây xanh ở Sài Gòn, Tisu ra đời từ
                        tình
                        yêu cà phê nguyên chất của anh chủ tiệm – một kỹ sư bỏ nghề để theo đuổi đam mê rang xay. Cái
                        tên
                        "Tisu" (từ tiếng Ý nghĩa "tinh khiết") được chọn để thể hiện triết lý: "Cà phê ngon phải giữ
                        trọn vị
                        nguyên bản của hạt."</p>
                </div>
                <div class="introduce__group">
                    <h3 class="introduce__title">Nguồn Gốc Nguyên Liệu</h3>
                    <p class="introduce__desc">
                    <ul>
                        <li><span class="introduce__bolder">Hạt cà phê:</span> Được tuyển chọn từ vùng Cầu Đất (Đà Lạt)
                            và
                            Buôn Ma Thuột, phối trộn giữa Arabica hương hoa trái và Robusta đậm vị chocolate.</li>
                        <li><span class="introduce__bolder">Cách rang:</span> Rang mộc truyền thống bằng củi, giữ lại vị
                            chua thanh và độ ngọt tự nhiên.</li>
                        <li><span class="introduce__bolder">Điểm đặc biệt:</span> Phục vụ bánh homemade làm từ công thức
                            gia
                            truyền của gia đình chủ tiệm.</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">Phong Cách & Không Gian</h3>
                    <p class="introduce__desc">
                    <ul>
                        <li><span class="introduce__bolder">Kiến trúc:</span> Pha trộn giữa retro Sài Gòn xưa và
                            minimalist
                            Nhật Bản, điểm nhấn là kệ sách gỗ cũ và bàn đá mộc.</li>
                        <li><span class="introduce__bolder">Âm nhạc:</span> Nhạc jazz những năm 70 hoặc tiếng máy quay
                            đĩa
                            vinyl</li>
                    </ul>
                    </p>
                </div>

                <div class="introduce__group">
                    <h3 class="introduce__title">Phong Cách & Không Gian</h3>
                    <p class="introduce__desc">
                        <span class="introduce__italic">"Mỗi ly cà phê ở Tisu là một câu chuyện – chúng tôi không bán
                            thức
                            uống, mà bán trải nghiệm tĩnh lặng giữa phố thị ồn ào."</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection