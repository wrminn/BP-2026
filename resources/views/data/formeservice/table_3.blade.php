@extends('layouts.app')
@section('title', $title)

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

    <section class="b-detail">
        <div class="form-wrapper">
                        <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="d-block mx-auto mb-3" style="max-width: 150px;">

            <h4 class="mb-4 text-center">{{ $title }}</h4>
            <h4 class="mb-4 text-center">แบบแสดงจำนงขอใช้บริการจัดเก็บขยะมูลฝอย</h4>
            <div class="list-group">
                <form action="{{ route('showform.save', ['menu' => $menuId, 'id' => $id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label class="form-label">วันที่</label>
                        <input type="text" name="field_date" class="form-control" value="{{ $Date }}" readonly>
                    </div>


                    <div class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <label for="prefix" class="form-label">คำนำหน้า<span class="text-danger">*</span></label>
                            <select id="prefix" name="field_1" class="form-control" required>
                                <option value="">-- โปรดเลือก --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">ชื่อ - นามสกุล<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="field_2" id="name" required>
                        </div>
                        <div class="col-md-3">
                            <label for="tel" class="form-label">เบอร์โทร<span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" name="field_3" id="tel" pattern="[0-9]{10}"
                                maxlength="10" required>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <div class="col-md-3">
                            <label class="form-label">บ้านเลขที่<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="field_4" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">หมู่ที่<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="field_5" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">ตรอก/ซอย<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="field_6" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">ถนน<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="field_7" required>
                        </div>
                    </div>

                  
                    <div class="mb-3 col-md-12 mt-4">
                        <label class="form-label"><strong>อัตราตามข้อบัญญัติเทศบาลตำบลบ้านโพธิ์
                                ดังนี้</strong></label><br>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="option1" name="canon_options[]"
                                value="option1" onchange="toggleCanonInputs(this)">
                            <label class="form-check-label" for="option1">รายเดือน</label>
                        </div>

                        <div class="row g-3 mt-3" id="extraInputs1" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="option1_amount" class="form-label">เป็นจำนวนเงิน (บาท)</label>
                                    <input type="text" class="form-control" name="field_8">
                                </div>
                                <div class="col-md-4">
                                    <label for="option1_month" class="form-label">เริ่มตั้งแต่เดือน.....เป็นต้นไป</label>
                                    <input type="text" class="form-control" name="field_9">
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="option2" name="canon_options[]"
                                value="option2" onchange="toggleCanonInputs(this)">
                            <label class="form-check-label" for="option2">ราย 6 เดือน</label>
                        </div>

                        <div class="row g-3 mt-3" id="extraInputs2" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="option2_amount" class="form-label">เป็นจำนวนเงิน (บาท) ต่อ 6 เดือน</label>
                                    <input type="text" class="form-control" name="field_10">
                                </div>
                                <div class="col-md-4">
                                    <label for="option2_month" class="form-label">เริ่มตั้งแต่เดือน.....เป็นต้นไป</label>
                                    <input type="text" class="form-control" name="field_11">
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="option3" name="canon_options[]"
                                value="option3" onchange="toggleCanonInputs(this)">
                            <label class="form-check-label" for="option3">รายปี</label>
                        </div>

                        <div class="row g-3 mt-3" id="extraInputs3" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="option3_amount" class="form-label">เป็นจำนวนเงิน (บาท) ต่อ 1 เดือน</label>
                                    <input type="text" class="form-control" name="field_12">
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">เริ่มตั้งแต่เดือน.....เป็นต้นไป</label>
                                    <input type="text" class="form-control" name="field_13">
                                </div>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="option4" name="canon_options[]"
                                value="option4" onchange="toggleCanonInputs(this)">
                            <label class="form-check-label" for="option4">อื่นๆ</label>
                        </div>

                        <div class="row g-3 mt-3" id="extraInputs4" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="option4_detail" class="form-label">อื่นๆ</label>
                                    <input type="text" class="form-control" name="field_15">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3 col-md-12">
                        <label class="form-label"><strong>พร้อมคำขอนี้ข้าพเจ้าได้แนบเอกสารหลักฐานต่างๆ มาด้วยแล้ว
                                ดังนี้</strong></label><br>

                        <!-- Checkbox 1 -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="doc_option1" name="document_options[]"
                                value="option1" onchange="toggleDocumentInputs(this)">
                            <label class="form-check-label"
                                for="doc_option1">สำเนาบัตรประจำตัวประชาชน/ข้าราชการ/พนักงานรัฐวิสาหกิจ/อื่นๆ</label>
                        </div>
                        <div class="row g-3 mt-3 mb-3" id="DocumentInputs1" style="display: none;">
                            <div class="col-md-4">
                                <label for="document_options1" class="form-label">อื่นๆ ระบุ</label>
                                <input type="text" class="form-control" id="document_options1"
                                    name="field_15">
                            </div>
                        </div>

                        <!-- Checkbox 2 -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="doc_option2" name="field_16[]"
                                value="doc_option2">
                            <label class="form-check-label" for="doc_option2">สำเนาทะเบียนบ้าน</label>
                        </div>

                        <!-- Checkbox 3 -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="doc_option3" name="document_options[]"
                                value="option3" onchange="toggleDocumentInputs(this)">
                            <label class="form-check-label" for="doc_option3">เอกสารและหลักฐานอื่นๆ</label>
                        </div>
                        <div class="row g-3 mt-3 mb-3" id="DocumentInputs2" style="display: none;">
                            <div class="col-md-4">
                                <label for="document_options3_detail" class="form-label">อื่นๆ ระบุ</label>
                                <input type="text" class="form-control" id="document_options3_detail"
                                    name="field_17">
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">ไฟล์แนบ</label>
                        <input type="file" id="files" name="files[]" class="form-control"
                            accept=".doc,.docx,.pdf,.xls,.xlsx" multiple>
                        <small class="text-muted">รองรับเฉพาะ .doc, .docx, .pdf, .xls, .xlsx, .png, .jpeg สูงสุด 5
                            ไฟล์</small>
                    </div>


                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ!',
                text: '{{ session('success') }}',
                confirmButtonText: 'ตกลง'
            });
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('files').addEventListener('change', function() {
            const maxFiles = 5;
            const maxSize = 25 * 1024 * 1024; // 25MB
            let isValid = true;

            if (this.files.length > maxFiles) {
                Swal.fire({
                    icon: 'error',
                    title: 'ไฟล์เกินจำนวน',
                    text: `❌ เลือกไฟล์ได้สูงสุด ${maxFiles} ไฟล์เท่านั้น`,
                });
                isValid = false;
            }

            for (let file of this.files) {
                if (file.size > maxSize) {
                    const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                    Swal.fire({
                        icon: 'error',
                        title: 'ไฟล์ใหญ่เกินไป',
                        html: `❌ ไฟล์ <b>${file.name}</b> (${fileSizeMB} MB) เกิน 25MB`,
                    });
                    isValid = false;
                    break;
                }
            }

            if (!isValid) {
                this.value = "";
            }
        });
    </script>
    <script>
        function toggleCanonInputs(checkbox) {
            const id = checkbox.id;
            const inputMap = {
                'option1': 'extraInputs1',
                'option2': 'extraInputs2',
                'option3': 'extraInputs3',
                'option4': 'extraInputs4'
            };

            const targetId = inputMap[id];
            if (targetId) {
                const target = document.getElementById(targetId);
                target.style.display = checkbox.checked ? 'block' : 'none';
            }
        }

        function toggleDocumentInputs(checkbox) {
            const inputMap = {
                'doc_option1': 'DocumentInputs1',
                'doc_option3': 'DocumentInputs2'
            };

            const targetId = inputMap[checkbox.id];
            if (targetId) {
                const target = document.getElementById(targetId);
                target.style.display = checkbox.checked ? 'block' : 'none';
            }
        }
    </script>

@endsection
