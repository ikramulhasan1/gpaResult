<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function showForm()
    {
        return view('result_form');
    }

    public function calculateResult(Request $request)
    {
        $request->validate([
            'bangla' => 'required|integer|min:0|max:80',  
            'english' => 'required|integer|min:0|max:90', 
            'math' => 'required|integer|min:0|max:130',  
        ]);

        $bangla = $request->input('bangla');
        $english = $request->input('english');
        $math = $request->input('math');

        $totalMarks = $bangla + $english + $math;

        $gpaPercentage = ($totalMarks / 200) * 100;
        $overallGrade = $this->getGrade($gpaPercentage);

        $banglaGrade = $this->getGrade(($bangla / 80) * 100);  
        $englishGrade = $this->getGrade(($english / 90) * 100); 
        $mathGrade = $this->getGrade(($math / 130) * 100);     

        $result = Result::create([
            'bangla' => $bangla,
            'english' => $english,
            'math' => $math,
            'total_marks' => $totalMarks,
            'total_grade' => $overallGrade,
        ]);

        return view('result', compact('bangla', 'banglaGrade', 'english', 'englishGrade', 'math', 'mathGrade', 'totalMarks', 'overallGrade'));
    }

    private function getGrade($percentage)
    {
        if ($percentage >= 80) {
            return 'A+';
        } elseif ($percentage >= 70) {
            return 'A';
        } elseif ($percentage >= 60) {
            return 'A-';
        } elseif ($percentage >= 50) {
            return 'B';
        } elseif ($percentage >= 40) {
            return 'C';
        } else {
            return 'Fail';
        }
    }
}
