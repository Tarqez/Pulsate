<!-- Copyright (c) 2016 Ezio Tarquilio -->

<?php
class Gallery {
	public $src = array();
	public $caption = array();

	public function __construct($galleryFolder, $installDir) {
		$allImgNames = glob("content/media/$galleryFolder/*");

		// remove not allowed images from $allImgNames
		$allowedImgTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);

		foreach ($allImgNames as $i => $imgName) {
			$imgType = exif_imagetype($imgName); // false also for very small file sizes

			if (!$imgType || !in_array($imgType, $allowedImgTypes)) {
				unset($allImgNames[$i]);
			} 	
		}

		// fill class properties array with sorted image-src and captions from gallery.txt
		try {
			$galleryFile = fopen("content/media/". $galleryFolder ."/gallery.txt", "r");
			if ($galleryFile) {
				while (!feof($galleryFile)) {
					$line = fgets($galleryFile);
					if (!empty($line)) {											
						$parts = explode('|', $line);
						$imgName = "content/media/$galleryFolder/".$parts[0];
						if (in_array($imgName, $allImgNames)) { // is it a real image in tthe folder?
							$this->src[] = $imgName;
							$this->caption[] = $parts[2];
						}
					}
				}
				fclose($galleryFile);	
			}		
		} catch (Exception $e) {
			unset($e); // if an exception is thrown, don't sort but end the script
		}

		// complete class properties arrays with image-src and captions missing in gallery.txt
		foreach ($allImgNames as $imgName) {
			if (!in_array($imgName, $this->src, true)) {
				$this->src[] = $imgName;
				$this->caption[] = '';		
			}
		}

		// set src with a full path to imgages
		foreach ($this->src as $i => $imgName) {
			$this->src[$i] = $installDir .'/'. $this->src[$i];
		}
	}
}
?>
