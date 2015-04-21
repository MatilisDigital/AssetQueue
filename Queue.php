<?php
/*
 * Queue assets and manage dependencies
 *
 * Copyright (c) 2004-2013 Valéry Ambroise <vambroise@matilis.mu>

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
 
 namespace MatilisLabs\AssetQueue;
 
 use MatilisLabs\AssetQueue\Collection;
 use MatilisLabs\AssetQueue\Asset\AssetInterface;
 
 class Queue{
	 
	 private static $collections = array();
	 
	 public static function collection($collection_id){
 
		 if(isset(self::$collections[$collection_id]) && self::$collections[$collection_id] instanceof Collection){
		 	return self::$collections[$collection_id];
		 }else{
			 $collection = new Collection($collection_id);
			 self::$collections[$collection_id] = $collection;		 	 
			 
			 return self::$collections[$collection_id];			 
		 } 
	 }
 }
?>
