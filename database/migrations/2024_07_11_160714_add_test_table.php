<?php

use App\Models\TestValue;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('test_values');
        Schema::create('test_values', function (Blueprint $table): void {
            $table->id();
            $table->string('value');
            $table->timestamps();
        });

        TestValue::create([
            'value' => 'API-' . Str::random(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('test_values');
    }
};