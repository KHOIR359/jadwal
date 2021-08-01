<h3 class="text-uppercase upcoming-title baloo text-white fw-bolder  text-center mt-3 text-shadow">Upcoming</h3>

<div class="row" id="upcomingBox">

</div>

<script>
    const kelas = localStorage.getItem('kelas') || 'XII MIPA 1';
    fetch('schedule/' + kelas + '.json').then(r => r.json()).then(data => {

        const dayName = document.querySelector('.dayName')
        let dayIndex = new Date().getDay() - 1
        if (dayIndex < 0) {
            dayIndex = 6
        }

        todayData = data[dayIndex]
        dayName.textContent = todayData.day


        let upcomingBox = document.getElementById('upcomingBox');

        function loadBoxFromTo(fromI, toI) {

            if (fromI >= 7) {
                fromI = 0
            }
            data.forEach(e => {
                if (e.no > 5 && e.no <= toI && e.no > fromI) {

                    upcomingBox.innerHTML += `<div class="col-6 anime mb-5 liburbox">
                <div class="card shadow-sm d-flex justify-content-center border-grey px-4 py-1 pb-3 upcoming-subjects-box">
                  <div class="titlebox">
                    <div class="fs-2 fw-bold text-uppercase dayName text-center text-primary rounded-sm baloo">
                      ${e.day}
                      </div>
                      </div>
                      <div class="row text-center mt-3">
                        <p class="text-danger fs-1 fw-bold">Libur</p>
                        </div>
                        </div>
                        </div>`
                    return
                }
                if (e.no > toI) {
                    return
                }

                if (e.no < fromI + 1) {
                    return
                }

                let subjectBoxes = e.subjects.map(f => `
                  <div class="subjectBox  upcomingSubjectBox mb-2 h100">
                    <div class="subject">
                        <span class="subjectText fs-5 fw-bold text-uppercase">${f.name}</span>
                    </div>
                    <div class="teacher">
                        <span class="teacherText">${f.teacher}</span>
                    </div>
                    <div class="duration">
                        <span class="durationText">${f.from} - ${f.to}</span>
                    </div>
                  </div>`)
                upcomingBox.innerHTML += `
      <div class="col-6 anime mb-5 hadirbox">
        <div class="card shadow-sm  border-grey px-4 py-1 pb-3 upcoming-subjects-box">
            <div class="titlebox">
                <div class="fs-2 fw-bold text-uppercase dayName text-center text-primary rounded-sm baloo">
                  ${e.day}
                </div>
            </div>
            <div class="row text-center mt-3">
                ${subjectBoxes.join('')}
            </div>
        </div>
     </div>`
            })
        }
        loadBoxFromTo(dayIndex + 1, 7)
        loadBoxFromTo(0, dayIndex)
        if (dayIndex % 2 !== 0) {
            const hadirbox = document.querySelector('.hadirbox')
            const liburbox = document.querySelectorAll('.liburbox > .card')
            liburbox.forEach(el => {
                el.style.height = `${hadirbox.offsetHeight}px`
            })
        }
    })
</script>
