<template>
<div>
    <div class="chat-sidebar">
        <div class="chat-sidebar-header">
            <div class="d-flex align-items-center">
                <div class="chat-user-online">
                    <img src="assets/images/avatars/avatar-1.png" width="45" height="45" class="rounded-circle" alt="" />
                </div>
                <div class="flex-grow-1 ms-2">
                    <p class="mb-0">Rachel Zane</p>
                </div>
                <div class="dropdown">
                    <div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end"> <a class="dropdown-item" href="javascript:;">Settings</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Help & Feedback</a>
                        <a class="dropdown-item" href="javascript:;">Enable Split View Mode</a>
                        <a class="dropdown-item" href="javascript:;">Keyboard Shortcuts</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Sign Out</a>
                    </div>
                </div>
            </div>
            <div class="mb-3"></div>
            <div class="input-group input-group-sm"> <span class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                <input type="text" class="form-control" placeholder="People, groups, & messages"> <span class="input-group-text bg-transparent"><i class='bx bx-dialpad'></i></span>
            </div>
            <div class="chat-tab-menu mt-3">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="javascript:;">
                            <div class="font-24"><i class='bx bx-conversation'></i>
                            </div>
                            <div><small>Chats</small>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="javascript:;">
                            <div class="font-24"><i class='bx bx-phone'></i>
                            </div>
                            <div><small>Calls</small>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="javascript:;">
                            <div class="font-24"><i class='bx bxs-contact'></i>
                            </div>
                            <div><small>Contacts</small>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="javascript:;">
                            <div class="font-24"><i class='bx bx-bell'></i>
                            </div>
                            <div><small>Notifications</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="chat-sidebar-content">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Chats">
                    <div class="p-3">
                        <div class="meeting-button d-flex justify-content-between">
                            <div class="dropdown"> <a href="#" class="btn btn-white btn-sm radius-30 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class='bx bx-video me-2'></i>Meet Now<i class='bx bxs-chevron-down ms-2'></i></a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Host a meeting</a>
                                    <a class="dropdown-item" href="#">Join a meeting</a>
                                </div>
                            </div>
                            <div class="dropdown"> <a href="#" class="btn btn-white btn-sm radius-30 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" data-display="static"><i class='bx bxs-edit me-2'></i>New Chat<i class='bx bxs-chevron-down ms-2'></i></a>
                                <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="#">New Group Chat</a>
                                    <a class="dropdown-item" href="#">New Moderated Group</a>
                                    <a class="dropdown-item" href="#">New Chat</a>
                                    <a class="dropdown-item" href="#">New Private Conversation</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown mt-3"> <a href="#" class="text-uppercase text-secondary dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">Recent Chats <i class='bx bxs-chevron-down'></i></a>
                            <div class="dropdown-menu">	<a class="dropdown-item" href="#">Recent Chats</a>
                                <a class="dropdown-item" href="#">Hidden Chats</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Sort by Time</a>
                                <a class="dropdown-item" href="#">Sort by Unread</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="#">Show Favorites</a>
                            </div>
                        </div>
                    </div>
                    <div class="chat-list">
                        <div class="list-group list-group-flush">
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-2.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Louis Litt</h6>
                                        <p class="mb-0 chat-msg">You just got LITT up, Mike.</p>
                                    </div>
                                    <div class="chat-time">9:51 AM</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item active">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-3.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Harvey Specter</h6>
                                        <p class="mb-0 chat-msg">Wrong. You take the gun....</p>
                                    </div>
                                    <div class="chat-time">4:32 PM</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-4.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Rachel Zane</h6>
                                        <p class="mb-0 chat-msg">I was thinking that we could...</p>
                                    </div>
                                    <div class="chat-time">Wed</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-5.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Donna Paulsen</h6>
                                        <p class="mb-0 chat-msg">Mike, I know everything!</p>
                                    </div>
                                    <div class="chat-time">Tue</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-6.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Jessica Pearson</h6>
                                        <p class="mb-0 chat-msg">Have you finished the draft...</p>
                                    </div>
                                    <div class="chat-time">9/3/2020</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-7.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Harold Gunderson</h6>
                                        <p class="mb-0 chat-msg">Thanks Mike! :)</p>
                                    </div>
                                    <div class="chat-time">12/3/2020</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-9.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Katrina Bennett</h6>
                                        <p class="mb-0 chat-msg">I've sent you the files for...</p>
                                    </div>
                                    <div class="chat-time">16/3/2020</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-10.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Charles Forstman</h6>
                                        <p class="mb-0 chat-msg">Mike, this isn't over.</p>
                                    </div>
                                    <div class="chat-time">18/3/2020</div>
                                </div>
                            </a>
                            <a href="javascript:;" class="list-group-item">
                                <div class="d-flex">
                                    <div class="chat-user-online">
                                        <img src="assets/images/avatars/avatar-11.png" width="42" height="42" class="rounded-circle" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0 chat-title">Jonathan Sidwell</h6>
                                        <p class="mb-0 chat-msg">That's bullshit. This deal..</p>
                                    </div>
                                    <div class="chat-time">24/3/2020</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "UserList"
}
</script>

<style scoped>

</style>
