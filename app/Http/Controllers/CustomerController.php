<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

class CustomerController extends Controller
{

    public function indexInfoCustomer()
    {
        $user = Auth::guard("customer")->user();

        return view("frontend.pages.customer.info", compact("user"));
    }

    public function updateInfoCustomer(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|max:100",
            "email" => [
                "required",
                "email",
                Rule::unique("khach_hangs", "email")->ignore($id, "khach_hang_id")
            ],
            "address" => "nullable|max:100",
            "phone" => "nullable|regex:/^0\d{9,10}$/",
            "photo" => "nullable|image|mimes:jpg,png|max:2048"
        ], [
            "name.required" => "Bạn chưa nhập họ và tên",
            "email.required" => "Bạn chưa nhập email",
            "email.email" => "Vui lòng nhập đúng email",
            "email.unique" => "Email đã có người sử dụng",
            "address.max" => "Vui lòng nhập dưới 100 kí tự",
            "phone.regex" => "Vui lòng nhập đúng định dạng điện thoại",
            "photo.image" => "Vui lòng chọn đúng hình ảnh",
            "photo.mimes" => "Vui lòng bạn chọn ảnh có định dạng jpg,png",
            "photo.max" => "Vui lòng chọn ảnh dưới 2mb"
        ]);

        $user = Customer::findOrFail($id);
        $user->update([
            "ten_khach_hang" => $request->input("name"),
            "email" => $request->input("email"),
            "dia_chi" => $request->input("address"),
            "sdt" => $request->input("phone")
        ]);



        if ($request->hasFile("photo")) {
            $file = $request->file("photo");
            $fileName = "photo-" . time() . "." . $file->extension();
            $file->move(public_path("images/frontend/user/"), $fileName);

            if ($user->hinh &&  file_exists(public_path("images/frontend/user/" . $user->hinh))) {
                unlink(public_path("images/frontend/user/" . $user->hinh));
            }
        }

        $user->update(
            ["hinh" => $fileName]
        );

        return redirect()->route("bank.index")->with([
            "notify" => "Đã cập nhật thông tin thành công",
            "status" => "success"
        ]);
    }
}
