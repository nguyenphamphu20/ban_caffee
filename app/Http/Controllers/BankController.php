<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\BankCard;

class BankController extends Controller
{

    public $user;

    public function __construct()
    {
        $this->user = Auth::guard("customer")->user();
    }

    public function index()
    {
        return view("frontend.pages.customer.index", ["user" => $this->user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("frontend.pages.customer.addAndUpdateBank", ["user" => $this->user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "bank_number" => "required|numeric|integer|digits:12|regex:/^[1-9]\d{11}$/|unique:the_ngan_hangs,so_the",
                "month" => [
                    "required",
                    "numeric",
                    "integer",
                    "between:1,12",
                    Rule::when(
                        request('year') === Carbon::now()->year(),
                        ['min:' . Carbon::now()->month()]
                    )
                ],
                "year" => [
                    "required",
                    "integer",
                    "min:" . Carbon::now()->year
                ]
            ],
            [
                "name.required" => "Bạn chưa nhập họ và tên",
                "bank_number.required" => "Bạn chưa nhập số thẻ khoản ngân hàng",
                "bank_number.unique" => "Số tài khoản đã có người dùng",
                "bank_number.numeric" => "Tài khoản phải là số",
                "bank_number.integer" => "Tài khoản phải là số nguyên",
                "bank_number.digits" => "Số thẻ có 12 số",
                "bank_number.regex" => "Số đầu tài khoản khác 0",
                "month.required" => "Bạn chưa nhập tháng",
                "month.integer" => "Tháng phải là số",
                "month.between" => "Tháng phải từ 1 tới 12",
                "month.min" => "Tháng không được nhỏ hơn tháng hiện tại(" . Carbon::now()->month() . ")",
                "year.required" => "Bạn chưa nhập năm",
                "year.min" => "Không thể nhập năm nhỏ hơn hiện tại (" . Carbon::now()->year() . ")"

            ]
        );

        BankCard::create([
            "khach_hang_id" => $this->user->khach_hang_id,
            "ten_ngan_hang" => $request->input("bank_names"),
            "so_the" => $request->input("bank_number"),
            "ten_chu_the" => $request->input("name"),
            "thang" => $request->input("month"),
            "nam" => $request->input("year")
        ]);

        return redirect()->route("bank.index")->with([
            "notify" => "Đã thêm thẻ thành công",
            "status" => "success"
        ]);
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bank = BankCard::find($id);

        return view("frontend.pages.customer.addAndUpdateBank", [
            "user" => $this->user,
            "bankUpdate" => $bank
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bank = BankCard::find($id);
        $request->validate(
            [
                "name" => "required",
                "bank_number" => [
                    "required",
                    "numeric",
                    "integer",
                    Rule::unique("the_ngan_hangs", "so_the")->ignore($bank->the_id, "the_id")
                ],
                "month" => [
                    "required",
                    "numeric",
                    "integer",
                    "between:1,12",
                    Rule::when(
                        request('year') === Carbon::now()->year(),
                        ['min:' . Carbon::now()->month()]
                    )
                ],
                "year" => [
                    "required",
                    "integer",
                    "min:" . Carbon::now()->year
                ]
            ],
            [
                "name.required" => "Bạn chưa nhập họ và tên",
                "bank_number.required" => "Bạn chưa nhập số thẻ khoản ngân hàng",
                "bank_number.numeric" => "Tài khoản phải là số",
                "bank_number.unique" => "Số tài khoản đã có người dùng",
                "bank_number.integer" => "Tài khoản phải là số nguyên",
                "bank_number.regex" => "Số tài khoản không hợp lệ",
                "month.required" => "Bạn chưa nhập tháng",
                "month.integer" => "Tháng phải là số",
                "month.between" => "Tháng phải từ 1 tới 12",
                "month.min" => "Tháng không được nhỏ hơn tháng hiện tại(" . Carbon::now()->month() . ")",
                "year.required" => "Bạn chưa nhập năm",
                "year.min" => "Không thể nhập năm nhỏ hơn hiện tại (" . Carbon::now()->year() . ")"

            ]
        );

        $bank->update([
            "ten_ngan_hang" => $request->input("bank_names"),
            "so_the" => $request->input("bank_number"),
            "ten_chu_the" => $request->input("name"),
            "thang" => $request->input("month"),
            "nam" => $request->input("year")
        ]);

        return redirect()->route("bank.index")->with([
            "notify" => "Đã sửa thẻ thành công",
            "status" => "success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BankCard::destroy($id);
        return redirect()->route("bank.index")->with([
            "notify" => "Đã xoá thẻ thành công",
            "status" => "success"
        ]);
    }
}
