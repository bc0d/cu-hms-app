<section id="services" class="services">
      <div class="container col-lg-8 hi mt-5  align-items-center">
      
      <div class="notify-tray flex items-center justify-between pb-6 font-bold mt-5">
        <div class="notify-count flex gap-2">
          <h2 class="tclamp2 pt-5">Feedbacks</h2>
          
            
        </div>
        <button
          class="mark-read text-sm font-normal text-[var(--darkGrayishBlue)] hover:text-[var(--blue)]"
          aria-pressed="false"
        >
            <div class="d-grid m-0 mr-2 mt-1">
                  <!--<button class="btn btn-outline-primary" type="button">more profie</button>-->
                  <a href="{{ url('user/feedback/give-feedback') }}" class=" d-flex justify-content-end"><span class="arrow  ">&#8594;</span>give feedback</a>
            </div>
        </button>
      </div>
      <div class="notifications-tray flex flex-col gap-3" >
        <div class="notification relative rounded-lg">
          <div
            class="read-shadow flex w-full gap-3 rounded-lg bg-[var(--veryLightGrayishBlue)] p-2">
           <!-- <img
              class="status-on h-fit"
              src="{{ asset('users/assets/img/team/team-3.jpg') }}"
              width="45"
              height="45"
              alt="Avatar Johnny Depp"
            />-->
            <div class="tclamp3 relative leading-[1.15rem] tracking-wide">
              <p class="notify-content">
                <strong>Johnny Depp</strong>
                
              </p>
              <p class="tclamp4 pb-1 pt-1 text-[var(--grayishBlue)]">
                5 days ago
              </p>
              <p
                class="rounded-lg border bg-white p-4 text-[var(--darkGrayishBlue)]"
              >
                Hello, thanks for setting up the Chess Club. I've been a member
                for a few weeks now and I'm already having lots of fun and
                improving my game.
              </p>
            </div>
          </div>
        </div>

        <div class="notification relative rounded-lg">
          <div
            class="read-shadow flex w-full gap-3 rounded-lg bg-[var(--veryLightGrayishBlue)] p-2">
           <!-- <img
              class="status-on h-fit"
              src="{{ asset('users/assets/img/team/team-3.jpg') }}"
              width="45"
              height="45"
              alt="Avatar Johnny Depp"
            />-->
            <div class="tclamp3 relative leading-[1.15rem] tracking-wide">
              <p class="notify-content">
                <strong>Johnny Depp</strong>
                
              </p>
              <p class="tclamp4 pb-1 pt-1 text-[var(--grayishBlue)]">
                5 days ago
              </p>
              <p
                class="rounded-lg border bg-white p-4 text-[var(--darkGrayishBlue)]"
              >
                Hello, thanks for setting up the Chess Club. I've been a member
                for a few weeks now and I'm already having lots of fun and
                improving my game.
              </p>
            </div>
          </div>
        </div>
        
        
        
      </div>
    </div>
  </section>
