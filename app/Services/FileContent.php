<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileContent
{
  /**
   * @return string
   */
  public function handle($field)
  {
    if (!request()->hasFile($field)) {
      return;
    }

    $files = Arr::wrap(request()->file($field));

    $filesPath = [];
    $path = $this->generatePath();

    foreach ($files as $file) {
      $filename = $this->generateFileName($file, $path);
      $file->storeAs(
        $path,
        $filename.'.'.$file->getClientOriginalExtension(),
        config('voyager.storage.disk', 'public')
      );

      array_push($filesPath, [
        'download_link' => $path.$filename.'.'.$file->getClientOriginalExtension(),
        'original_name' => $file->getClientOriginalName(),
      ]);
    }

    return json_encode($filesPath);
  }

  /**
   * @return string
   */
  protected function generatePath()
  {
    $slug = explode('.', request()->route()->getName())[1];
    return $slug.DIRECTORY_SEPARATOR.date('FY').DIRECTORY_SEPARATOR;
  }

  /**
   * @return string
   */
  protected function generateFileName($file, $path)
  {
      $filename = Str::random(20);
      // Make sure the filename does not exist, if it does, just regenerate
      while (Storage::disk(config('voyager.storage.disk'))->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
        $filename = Str::random(20);
      }


    return $filename;
  }
}
