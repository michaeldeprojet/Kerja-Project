<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Presensi;
use App\Models\DataSiswa;
use App\Models\InputNilai;
use App\Models\Penentuan;
use Illuminate\Support\Facades\Auth;

class PembimbingController extends Controller
{
    public function pembimbing()
    {
        $keseluruhan = DataSiswa::all()->count();
        $siswaPKL = Penentuan::all()->count();
        $belumPKL = $keseluruhan-$siswaPKL;
        return view ('pembimbing.dashboard', [
            'keseluruhan' => $keseluruhan,
            'siswaPKL' => $siswaPKL,
            'belumPKL' => $belumPKL
        ]);
    }

    public function profile()
    {
        return view ('pembimbing.profile');
    }

    public function kompetensi()
    {
        return view ('pembimbing.kompetensi');
    }

    public function siswa()
    {
        $userId = Auth::user()->id;

        // $data = Penentuan::where('id_pembimbing', $mid)->get();
        $data = Penentuan::with('siswa')->where('id_pembimbing', $userId)->get();
        return view ('pembimbing.siswa', compact('data') );
    }

    public function presensi()
    {
        $datas= Presensi::orderBy("tgl_pkl","DESC")->get();
        return view('pembimbing.presensi', compact('datas'));
    }

    public function nilai()
    {
        //get current logged in user data
        $user = Auth::user();

        // ambil nilai pkl, dengan data siswa dan data jurusan (lewat relasi siswa)
        // where has buat ngecek kalo siswa nya merupakan siswa yang dibimbing atau bukan
        $scores = InputNilai::with(['student', 'student.jurusans'])
            ->whereHas('student', fn ($query) => [$query->where('pembimbing_id', $user->id)])
            ->get();

        return view('pembimbing.inputnilai')
            ->with('scores', $scores)
            ->with('user', $user);
    }

    public function tambahpenilaian()
    {
        //get current logged in user data
        $user = Auth::user();

        $students = DataSiswa::where('pembimbing_id', $user->id)->get();

        return view ('pembimbing.tambahpenilaian')->with('students', $students);
    }

    public function studentDetail($id) {
        $student = DataSiswa::with(['jurusans', 'suratPkl'])->findOrFail($id);

        return response()->json($student);
    }

    public function submitScore(Request $request, $id) {

        $score = new InputNilai;
        $score->id_siswa = $request->studentId;
        $score->nama_pt = $request->company;
        $score->nama_industri = $request->industri;
        $score->instruktur = $request->instruktur;
        //tambah disini buat kelas dan periode

        //json_encode buat merubah array assosiatif php ke string json biar bisa diinput ke database
        $score->nilai_catatan_laporan = json_encode([
            'score' => $request->reportScore,
            'note' => $request->reportNote,
        ]);
        $score->nilai_aspek_sikap = json_encode([
            'score' => [
                'komitmen_dan_integritas' => $request->commitmentScore,
                'menghargai_dan_menghormati' => $request->respectScore,
                'kreativitas' => $request->creativityScore,
                'kerja_sama_tim' => $request->teamworkScore,
                'disiplin_dan_bertanggung_jawab' =>$request->disciplineScore,
            ],
            'note' => [
                'komitmen_dan_integritas' => $request->commitmentNote,
                'menghargai_dan_menghormati' => $request->respectNote,
                'kreativitas' => $request->creativityNote,
                'kerja_sama_tim' => $request->teamworkNote,
                'disiplin_dan_bertanggung_jawab' =>$request->disciplineNote,
            ],
        ]);
        $score->nilai_aspek_pengetahuan = json_encode([
            'score' => [
                'penguasaan_keilmuan' => $request->understandingScore,
                'kemampuan_mengidentifikasi_masalah' => $request->problemSolvingScore,
                'kemampuan_menemukan_alternatif_solusi_secara_kreatif' => $request->alternativeScore,
            ],
            'note' => [
                'penguasaan_keilmuan' => $request->understandingNote,
                'kemampuan_mengidentifikasi_masalah' => $request->problemSolvingNote,
                'kemampuan_menemukan_alternatif_solusi_secara_kreatif' => $request->alternativeNote,
            ],
        ]);
        $score->nilai_aspek_keterampilan = json_encode([
            'score' => [
                'keahlian_dan_keterampilan' => $request->competencyScore,
                'inovasi_dan_kreativitas' => $request->innovationScore,
                'produktivitas_dan_penyelesaian_tugas' => $request->productivityScore,
                'penguasaan_alat_kerja' => $request->toolsProficiencyScore,
            ],
            'note' => [
                'keahlian_dan_keterampilan' => $request->competencyNote,
                'inovasi_dan_kreativitas' => $request->innovationNote,
                'produktivitas_dan_penyelesaian_tugas' => $request->productivityNote,
                'penguasaan_alat_kerja' => $request->toolsProficiencyNote,
            ],
        ]);
        $score->nilai_rata_rata = json_encode([
            'nilai_aspek_sikap' => $request->attitudeAverageScore,
            'nilai_aspek_pengetahuan' => $request->skillAverageScore,
            'nilai_aspek_keterampilan' => $request->knowledgeAverageScore,
            'rata_rata' => $request->averageScore,
        ]);
        $score->nilai_akhir = $request->finalScore;
        $score->upload_file = 'upload'; //nanti diisi di pdfcontroller

        $score->save();

        return response()->json(['score_id' => $score->id]);
    }

    public function laporan()
    {
        return view ('pembimbing.rekaplaporan');
    }

}
