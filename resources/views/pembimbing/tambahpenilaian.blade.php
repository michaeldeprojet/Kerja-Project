@extends('layouts.pembimbing')

@section('content-header')
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b> Input Nilai Siswa</b></h1>
        </div>
      </div>
    </div>

    <div class="m-4">
        <div class="mb-3 mx-3 row">
            <label for="select-input-student" class="col-sm-2 col-form-label">Nama Peserta didik</label>
            <div class="col-sm-10">
                <select class="form-control" name="student-name" id="select-input-student">
                    @foreach ($students as $student)
                        <option value="" disabled selected>-</option>
                        <option value="{{$student->id}}">{{$student->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="hidden" name="student-id" id="selected-student-id">

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="student-group" readonly>
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="student-period" readonly>
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="kompetensi-keahlian" readonly>
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama PT</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="company">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Industri</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="industri">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Instruktur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="instruktur">
            </div>
        </div>

        <!-- input nilai -->

        <!-- Aspek Sikap -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Aspek Sikap</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="row text-center">
                    <div class="col-6 col-sm-3">KOMPONEN PENILAIAN</div>
                    <div class="col-6 col-sm-1">NILAI</div>
                    <div class="col-6 col-sm-8">KETERANGAN</div>
                  </div>

                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Komitmen dan integritas</label>
                    <div class="col-sm-1">
                      <input type="number" onkeyup="checkAttitudeVal()" max="100" class="form-control" id="attitude-commitment-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="attitude-commitment-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Menghargai dan Menghormati</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkAttitudeVal()" max="100" class="form-control" id="attitude-respect-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="attitude-respect-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kreativitas</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkAttitudeVal()" max="100" class="form-control" id="attitude-creativity-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="attitude-creativity-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kerja Sama Team</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkAttitudeVal()" max="100" class="form-control" id="attitude-teamwork-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="attitude-teamwork-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Disiplin dan Bertanggung Jawab</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkAttitudeVal()" max="100"  class="form-control" id="attitude-discipline-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="attitude-discipline-note">
                      </div>
                </div>
              </div>
        </div>

        <!-- Aspek Pengetahuan -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Aspek Pengetahuan</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="row text-center">
                  <div class="col-6 col-sm-3">KOMPONEN PENILAIAN</div>
                  <div class="col-6 col-sm-1">NILAI</div>
                  <div class="col-6 col-sm-8">KETERANGAN</div>
                </div>

                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Penguasaan Keilmuan</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkKnowledgeVal()" max="100" class="form-control" id="knowledge-understanding-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="knowledge-understanding-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kemampuan Mengidentifikasi Masalah</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkKnowledgeVal()" max="100" class="form-control" id="knowledge-problem-solving-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="knowledge-problem-solving-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kemampuan Menemukan Alternatif Solusi Secara Kreatif</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkKnowledgeVal()" max="100" class="form-control" id="knowledge-alternative-solution-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="knowledge-alternative-solution-note">
                      </div>
                </div>
            </div>
        </div>

        <!-- Aspek keterampilan -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Aspek Keterampilan</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="row text-center">
                  <div class="col-6 col-sm-3">KOMPONEN PENILAIAN</div>
                  <div class="col-6 col-sm-1">NILAI</div>
                  <div class="col-6 col-sm-8">KETERANGAN</div>
                </div>

                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Keahlian dan Keterampilan</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkSkillVal()" max="100" class="form-control" id="skill-competency-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="skill-competency-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Inovasi dan Kreativitas</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkSkillVal()" max="100" class="form-control" id="skill-innovation-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="skill-innovation-note">

                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Produktivitas dan Penyelesaian Tugas</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkSkillVal()" max="100" class="form-control" id="skill-productivity-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="skill-productivity-note">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Penguasaan Alat Kerja</label>
                    <div class="col-sm-1">
                        <input type="number" onkeyup="checkSkillVal()" max="100" class="form-control" id="skill-tools-proficiency-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="skill-tools-proficiency-note">
                      </div>
                </div>
            </div>
        </div>

        <div class="ml-4 my-4">
            <h4>
                <li><b> Nilai Laporan PKL</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Laporan PKL</label>
                    <div class="col-sm-1">
                    <input type="number" onkeyup="checkFinalScore()" class="form-control" id="report-score">
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="report-note">
                    </div>
                </div>
            </div>
        </div>

        <!-- Nilai Rata-Rata -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Nilai Rata - Rata</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Aspek Sikap</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control text-white" id="attitude-average-score" readonly aria-readonly="true" style="background-color: #7176EF">
                    </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Aspek Pengetahuan</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control text-white" id="knowledge-average-score" readonly aria-readonly="true" style="background-color: #7176EF">
                    </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Aspek Keterampilan</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control text-white" id="skill-average-score" readonly aria-readonly="true" style="background-color: #7176EF">
                    </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Rata-Rata</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control text-white" id="general-average-score" readonly aria-readonly="true" style="background-color: #34365B">
                    </div>
                </div>
            </div>
        </div>


        <!-- Nilai Akhir -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Nilai Akhir</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Akhir</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" readonly id="final-score">
                    </div>
                    <div class="col-sm-11 m-4">
                        <button type="button" class="form-control text-white" style="background-color: #7176EF"><b>NA = (Nilai Rata-rata 1,2, &3) x 80% + (Nilai Laporan PKL) x 20% </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5" style="margin-right:30px padding:20px">
            <button class="btn btn-secondary me-md-2" type="button" style="margin-right: 20px; width:190px">View</button>
            <button class="btn btn-success" type="button" onclick="submitScore()" style="width:190px">Submit</button>
        </div>

    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#select-input-student').change(() => {
            let studentId = $('#select-input-student').val();

            const url = `{!! URL::to('/api/student-detail/${studentId}') !!}`;

            $.ajax({
                method: 'get',
                url: url,
                dataType: 'json',
                beforeSend: function() {},
                success: function(response) {
                    console.log(response)
                    $('#selected-student-id').val(response.id)
                    $('#kompetensi-keahlian').val(response.jurusans.jurusan)
                },
            });
        })

        function checkAttitudeVal() {
            let commitmentScore = parseInt($('#attitude-commitment-score').val());
            let respectScore = parseInt($('#attitude-respect-score').val());
            let creativityScore = parseInt($('#attitude-creativity-score').val());
            let teamworkScore = parseInt($('#attitude-teamwork-score').val());
            let disciplineScore = parseInt($('#attitude-discipline-score').val());

            if (commitmentScore && respectScore && creativityScore && teamworkScore && disciplineScore) {
                let totalScore = commitmentScore + respectScore + creativityScore + teamworkScore + disciplineScore;
                let attitudeScoreAverage = totalScore / 5;

                $('#attitude-average-score').val(attitudeScoreAverage);
                checkGeneralVal();
            }
        }

        function checkKnowledgeVal() {
            let understandingScore = parseInt($('#knowledge-understanding-score').val());
            let problemSolvingScore = parseInt($('#knowledge-problem-solving-score').val());
            let alternativeScore = parseInt($('#knowledge-alternative-solution-score').val());

            if (understandingScore && problemSolvingScore && alternativeScore) {
                let totalScore = understandingScore + problemSolvingScore + alternativeScore;
                let knowledgeScoreAverage = totalScore / 3;

                $('#knowledge-average-score').val(knowledgeScoreAverage);
                checkGeneralVal();
            }
        }

        function checkSkillVal() {
            let competencyScore = parseInt($('#skill-competency-score').val());
            let innovationScore = parseInt($('#skill-innovation-score').val());
            let productivityScore = parseInt($('#skill-productivity-score').val());
            let toolsProficiencyScore = parseInt($('#skill-tools-proficiency-score').val());

            if (competencyScore && innovationScore && productivityScore && toolsProficiencyScore) {
                let totalScore = competencyScore + innovationScore + productivityScore + toolsProficiencyScore;
                let skillScoreAverage = totalScore / 4;

                $('#skill-average-score').val(skillScoreAverage);
                checkGeneralVal();
            }
        }

        function checkGeneralVal() {
            let attitudeAverageScore = parseInt($('#attitude-average-score').val());
            let skillAverageScore = parseInt($('#skill-average-score').val());
            let knowledgeAverageScore = parseInt($('#knowledge-average-score').val());

            if (attitudeAverageScore && skillAverageScore && knowledgeAverageScore) {
                let generalTotalScore = attitudeAverageScore + skillAverageScore + knowledgeAverageScore;
                let generalAverageScore = generalTotalScore / 3;

                $('#general-average-score').val(generalAverageScore);
                checkFinalScore();
            }
        }

        function checkFinalScore() {
            let reportScore = parseInt($('#report-score').val());
            let averageScore = parseInt($('#general-average-score').val());

            if (reportScore && averageScore) {
                let finalScore = (averageScore * 0.8) + (reportScore * 0.2);

                $('#final-score').val(finalScore);
            }
        }

        function submitScore() {
            let studentId = $('#selected-student-id').val();

            const url = `{!! URL::to('/api/submit-score/${studentId}') !!}`;

            //profil
            let industri = $('#industri').val()
            let instruktur = $('#instruktur').val()
            let company = $('#company').val()
            //tambah disini buat kelas dan periode

            //nilai sikap
            let commitmentScore = parseInt($('#attitude-commitment-score').val());
            let respectScore = parseInt($('#attitude-respect-score').val());
            let creativityScore = parseInt($('#attitude-creativity-score').val());
            let teamworkScore = parseInt($('#attitude-teamwork-score').val());
            let disciplineScore = parseInt($('#attitude-discipline-score').val());

            //catatan sikap
            let commitmentNote = $('#attitude-commitment-note').val();
            let respectNote = $('#attitude-respect-note').val();
            let creativityNote = $('#attitude-creativity-note').val();
            let teamworkNote = $('#attitude-teamwork-note').val();
            let disciplineNote = $('#attitude-discipline-note').val();

            //nilai pengetahuan
            let understandingScore = parseInt($('#knowledge-understanding-score').val());
            let problemSolvingScore = parseInt($('#knowledge-problem-solving-score').val());
            let alternativeScore = parseInt($('#knowledge-alternative-solution-score').val());

            //catatan pengetahuan
            let understandingNote = $('#knowledge-understanding-note').val();
            let problemSolvingNote = $('#knowledge-problem-solving-note').val();
            let alternativeNote = $('#knowledge-alternative-solution-note').val();

            //nilai keterampilan
            let competencyScore = parseInt($('#skill-competency-score').val());
            let innovationScore = parseInt($('#skill-innovation-score').val());
            let productivityScore = parseInt($('#skill-productivity-score').val());
            let toolsProficiencyScore = parseInt($('#skill-tools-proficiency-score').val());

            //catatan keterampilan
            let competencyNote = $('#skill-competency-note').val();
            let innovationNote = $('#skill-innovation-note').val();
            let productivityNote = $('#skill-productivity-note').val();
            let toolsProficiencyNote = $('#skill-tools-proficiency-note').val();

            // nilai rata rata
            let attitudeAverageScore = parseInt($('#attitude-average-score').val());
            let skillAverageScore = parseInt($('#skill-average-score').val());
            let knowledgeAverageScore = parseInt($('#knowledge-average-score').val());
            let averageScore = parseInt($('#general-average-score').val());

            //nilai laporan
            let reportScore = parseInt($('#report-score').val());
            let reportNote = $('#report-note').val();

            //nilai akhir
            let finalScore = $('#final-score').val();

            let payload = {
                studentId,
                industri,
                instruktur,
                company,
                commitmentScore,
                respectScore,
                creativityScore,
                teamworkScore,
                disciplineScore,
                understandingScore,
                problemSolvingScore,
                alternativeScore,
                competencyScore,
                innovationScore,
                productivityScore,
                toolsProficiencyScore,
                attitudeAverageScore,
                skillAverageScore,
                knowledgeAverageScore,
                commitmentNote,
                respectNote,
                creativityNote,
                teamworkNote,
                disciplineNote,
                understandingNote,
                problemSolvingNote,
                alternativeNote,
                competencyNote,
                innovationNote,
                productivityNote,
                toolsProficiencyNote,
                attitudeAverageScore,
                skillAverageScore,
                knowledgeAverageScore,
                averageScore,
                reportScore,
                reportNote,
                finalScore
            }

            $.ajax({
                method: 'post',
                url: url,
                data: payload,
                dataType: 'json',
                beforeSend: function() {},
                success: function(response) {
                    window.open(`{!! URL::to('/generate-nilai-pkl/${response.score_id}') !!}`, "_blank");
                },
            });
        }
    </script>
@endsection
