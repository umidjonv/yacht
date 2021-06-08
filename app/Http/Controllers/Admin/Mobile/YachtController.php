<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Common\Arrays\Area;
use App\Http\Requests\YachtMobileRequest;
use App\Http\Requests\YachtRequest;
use App\Models\Activity;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Yacht;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class YachtController extends Controller
{

    /**
     * @return Factory|Application|View
     */
    public function index()
    {
        return view("admin.mobile.yacht.index")->with("yachts", Yacht::query()->with("Images")->get());
    }

    public function register()
    {
        return view("admin.mobile.yacht.register")
            ->with([
                "vendors" => Vendor::get(),
                "areas" => Area::get(),
            ]);
    }

    /**
     * @param YachtMobileRequest $request
     * @return RedirectResponse
     */
    public function save(YachtMobileRequest $request): RedirectResponse
    {
        $yacht = Yacht::query()->create([
            "Name" => $request->Name,
            "Area" => $request->Area,
            "Address" => $request->Postcode,
            "VendorId" => 1,
            "Capacity" => $request->Capacity,
            "Length" => $request->Length
        ]);

        Activity::query()->create([
            "YachtId" => $yacht->Id,
            "StartTime" => $this->getTime($request->Open["From"]),
            "EndTime" => $this->getTime($request->Open["To"]),
            "Regularity" => 1,
        ]);

        return redirect()->route("admin.mobile.yacht.index")->with("message", __("yacht created successfully"));
    }

    /**
     * @param Yacht $yacht
     * @return Factory|Application|View
     */
    public function edit(Yacht $yacht)
    {
        return view("admin.mobile.yacht.edit")
            ->with([
                "yacht" => $yacht->load("activities"),
                "areas" => Area::get()
            ]);
    }

    /**
     * @param YachtMobileRequest $request
     * @param Yacht $yacht
     * @return RedirectResponse
     */
    public function update(YachtMobileRequest $request, Yacht $yacht): RedirectResponse
    {
        tap($yacht)->update([
            "Name" => $request->Name,
            "Area" => $request->Area,
            "Address" => $request->Postcode,
            "VendorId" => 1,
            "Capacity" => $request->Capacity,
            "Length" => $request->Length
        ]);

        Activity::query()->where("YachtId", $yacht->Id)->update([
            "StartTime" => $this->getTime($request->Open["From"]),
            "EndTime" => $this->getTime($request->Open["To"]),
            "Regularity" => 1,
        ]);
        return redirect()->route("admin.mobile.yacht.index")->with("message", __("edited successfully"));
    }

    /**
     * @param array $time
     * @return string
     */
    private function getTime(array $time): string
    {
        $hours = strlen($time["Hours"]) == 1 ? "0" . $time["Hours"] : $time["Hours"];
        $minutes = strlen($time["Minutes"]) == 1 ? "0" . $time["Minutes"] : $time["Minutes"];

        return "{$hours}:{$minutes}:00";
    }
}
