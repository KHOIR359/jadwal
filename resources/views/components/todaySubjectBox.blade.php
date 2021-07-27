<h3 class="fs-1 today-title text-center text-success fw-bold">Today</h3>
<div class="card shadow-sm d-flex justify-content-center border-grey px-4 py-1 pb-3 subjects-box">
    <div class="titlebox">
        <div class="fs-2 fw-bold text-uppercase dayName text-center text-primary rounded-sm">
        </div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-4">
            <div class="subjectBox todaySubjectBox">
                <div class="subject">
                    <span class="subjectText baloo fs-5 fw-bold text-uppercase">Matematika</span>
                </div>
                <div class="teacher">
                    <span class="teacherText">Porman</span>
                </div>
                <div class="duration">
                    <span class="durationText">7:00 - 8:10</span>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="subjectBox todaySubjectBox">
                <div class="subject">
                    <span class="subjectText baloo fs-5 fw-bold text-uppercase">Matematika</span>
                </div>
                <div class="teacher">
                    <span class="teacherText">Porman</span>
                </div>
                <div class="duration">
                    <span class="durationText">7:00 - 8:10</span>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="subjectBox todaySubjectBox">
                <div class="subject">
                    <span class="subjectText baloo fs-5 fw-bold text-uppercase">Matematika</span>
                </div>
                <div class="teacher">
                    <span class="teacherText">Porman</span>
                </div>
                <div class="duration">
                    <span class="durationText">7:00 - 8:10</span>
                </div>
            </div>
        </div>

        <div class="bottom-section">
            <a href="#">See More</a>
        </div>
    </div>
</div>

<script>
    kelas = localStorage.getItem('kelas') || 'XII MIPA 1';
    fetch('schedule/' + kelas + '.json').then(r => r.json()).then(data => {

        const dayName = document.querySelector('.dayName')
        let dayIndex = new Date().getDay() - 1
        if (dayIndex < 0) {
            dayIndex = 6
        }

        todayData = data[dayIndex]
        dayName.textContent = todayData.day

        let todaySubjectBoxes = document.querySelectorAll('.todaySubjectBox')
        todaySubjectBoxes.forEach((e, i) => {
            const subject = todayData.subjects[i];
            e.querySelector('.subjectText').textContent = subject.name
            e.querySelector('.teacherText').textContent = subject.teacher
            e.querySelector('.durationText').textContent = `${subject.from} - ${subject.to}`
        })

    })
</script>
