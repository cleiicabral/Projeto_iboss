<?

namespace App\Http\Controllers\Product;

use App\Http\Services\Product\DestroyProductService;

class DestroyProductController
{


    public function destroy(DestroyProductService $service, int $id)
    {

        try {
            $result = $service->execute($id);
            return $result;
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()],400);
        }

    }
}