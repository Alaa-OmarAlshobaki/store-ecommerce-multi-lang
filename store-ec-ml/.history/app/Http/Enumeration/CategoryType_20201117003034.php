<?php
namespace App\Http\Enumeration;
class CategoryType extends $table->enum('choices', ['foo', 'bar'])->nullable()->default(['foo', 'bar']);