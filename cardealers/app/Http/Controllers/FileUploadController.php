<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Purchase;
use App\Models\Gallery;
use App\Models\GalleryPort;
use App\Models\GalleryBuy;

class FileUploadController extends Controller
{
    public function showUploadForm(Request $request)
    {
        $purchase = Purchase::where('id', $request->id)->firstOrFail();
        return view('adminka.fileupload', compact('purchase'));
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,pdf|max:2048',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        $purchase = Purchase::where('id', $request->id)->firstOrFail();
        $purchase->filename = $fileName;
        $purchase->filepath = $filePath;
        $purchase->save();

        return back()
            ->with('success', 'You have successfully uploaded the file.')
            ->with('file', $fileName);
    }


    public function displayFiles()
    {
        $purchase = Purchase::findOrFail($id);

        return view('files', compact('purchase'));
    }

    public function showPhotoUploadForm(Request $request)
    {
        $purchase = Purchase::where('id', $request->id)->firstOrFail();
        $galleries = Gallery::where('purchase_id', $request->id)->with('purchase')->get();
        $galleriesport = GalleryPort::where('purchase_id', $request->id)->with('purchase')->get();
        $galleriesbuy = GalleryBuy::where('purchase_id', $request->id)->with('purchase')->get();
        return view('adminka.photoupload', compact('purchase', 'galleries', 'galleriesport', 'galleriesbuy'));
    }

    public function storeGalleryPhoto(Request $request)
    {
        $request->validate([
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $purchase_id = $request->id;

        if($request->hasfile('photos')) {
            foreach($request->file('photos') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('gallery', $name, 'public');

                Gallery::create([
                    'purchase_id' => $purchase_id,
                    'image_path' => $filePath
                ]);
            }
        }

        return back()->with('success', 'Photos have been uploaded successfully');
    }

    public function destroyGalleryPhotos($id)
    {
        $gallery = Gallery::findOrFail($id);
        $image_path = storage_path('app/public/gallery/' . basename($gallery->image_path));

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $gallery->delete();

        return back()->with('success', 'Photo has been deleted successfully');
    }

    public function storeGalleryPortPhoto(Request $request)
    {
        $request->validate([
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $purchase_id = $request->id;

        if($request->hasfile('photos')) {
            foreach($request->file('photos') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('galleryport', $name, 'public');

                GalleryPort::create([
                    'purchase_id' => $purchase_id,
                    'image_path' => $filePath
                ]);
            }
        }

        return back()->with('success', 'Photos have been uploaded successfully');
    }

    public function destroyGalleryPortPhotos($id)
    {
        $gallery = GalleryPort::findOrFail($id);
        $image_path = storage_path('app/public/galleryport/' . basename($gallery->image_path));

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $gallery->delete();

        return back()->with('success', 'Photo has been deleted successfully');
    }

    public function storeGalleryBuyPhoto(Request $request)
    {
        $request->validate([
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $purchase_id = $request->id;

        if($request->hasfile('photos')) {
            foreach($request->file('photos') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('gallerybuy', $name, 'public');

                GalleryBuy::create([
                    'purchase_id' => $purchase_id,
                    'image_path' => $filePath
                ]);
            }
        }

        return back()->with('success', 'Photos have been uploaded successfully');
    }

    public function deleteGalleryBuyPhoto($id)
    {
        $gallery = GalleryPort::findOrFail($id);
        $image_path = storage_path('app/public/galleryport/' . basename($gallery->image_path));

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $gallery->delete();

        return back()->with('success', 'Photo has been deleted successfully');
    }
}
