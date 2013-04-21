<?php

namespace Compat;

interface Compat
{
	/**
	 * Resolve a file source and return the pathname.
	 *
	 * @param string|int|FilesModel $file
	 *     The file source.
	 * @param string                $fallback
	 *     If not *null* Test if the file really exists in the filesystem and if not, return $fallback.
	 *     $fallback = false means, check for existence and return *false* if file not exists.
	 *     IF $file is a DBAFS ID and the record is not found, $fallback is also returned.
	 *
	 * @return string|null The pathname to the file or $fallback if file not found.
	 */
	static public function resolveFile($file, $fallback = null);

	/**
	 * Store a file pathname in tl_files and return the file ID.
	 *
	 * @param string $file
	 *     The file pathname.
	 *
	 * @return string|int The pathname if dbafs is not supported or disabled or the tl_files record ID.
	 */
	static public function syncFile($file);
}
