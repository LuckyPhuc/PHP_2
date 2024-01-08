<nav class="col-2 nav__vertical">
    <div class="d-flex my-2 justify-center align-items-center thumb_logo">
        <img src="{{ asset('img/dragon.png') }}" class="logo" alt="Logo_IMG">
        <span class="producer__name">
            <div class="sidebar__text">The Lone Dragon</div>
        </span>
        <button class="brand__tool">
            <i class="bi bi-chevron-double-left"></i>
        </button>
    </div>
    <ul>
        <li>
            <button class="vertical__menu" href="#">
                <div class="menu__item"> <i class="bi bi-house"></i>
                    <span class="sidebar__text">Trang chủ</span>
                </div>
                <span><i class="bi bi-chevron-right"></i></span>
            </button>
        </li>
        <li>
            <button class="vertical__menu" href="#">
                <div class="menu__item"><i class="bi bi-graph-up"></i>
                    <span class="sidebar__text">Bảng điều khiển
                    </span>
                </div>
                <span><i class="bi bi-chevron-right"></i></span>
            </button>
        </li>
        <li>
            <button class="vertical__menu">
                <div class="menu__item">
                    <i class="bi bi-people"></i>
                    <span class="sidebar__text">Người dùng</span>
                </div>
                <span class="__icon"><i class="bi bi-chevron-right "></i></span>
            </button>
            <div class="menu__dropdown">
                <a href="{{ Route('admin.users.list') }}">Danh sách người dùng</a>
                <a href="{{ Route('admin.users.create') }}">Thêm người dùng</a>
            </div>
        </li>


        <li>
            <button class="vertical__menu" href="#">
                <div class="menu__item"><i class="bi bi-box"></i>
                    <span class="sidebar__text">Sản phẩm</span>
                </div>
                <span class="__icon"><i class="bi bi-chevron-right "></i></span>
            </button>
            <div class="menu__dropdown">
                <a href="#">Danh sách sản phẩm</a>
                <a href="#">Thêm sản phẩm</a>
            </div>
        </li>
        <li>
            <button class="vertical__menu" href="#">
                <div class="menu__item"><i class="bi bi-box-arrow-in-right"></i>
                    <span class="sidebar__text">Đơn hàng</span>
                </div>
                <span class="__icon"><i class="bi bi-chevron-right "></i></span>
            </button>
            <div class="menu__dropdown">
                <a href="#">Danh sách đơn hàng</a>
            </div>
        </li>
        <li>
            <button class="vertical__menu" href="#">
                <div class="menu__item"><i class="bi bi-postcard-heart"></i>
                    <span class="sidebar__text">Coupon
                    </span>
                </div>
                <span class="__icon"><i class="bi bi-chevron-right "></i></span>
            </button>
            <div class="menu__dropdown">
                <a href="#">Danh sách coupon</a>
                <a href="#">Tạo mới coupon</a>
            </div>
        </li>
        <li>
            <button class="vertical__menu" href="#">
                <div class="menu__item"> <i class="bi bi-boxes"></i>
                    <span class="sidebar__text">Tài nguyên website
                    </span>
                </div>
                <span class="__icon"><i class="bi bi-chevron-right __icon"></i></span>
            </button>
        </li>
    </ul>
</nav>
