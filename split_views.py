import re
import os

with open('index.html.bak', 'r') as f: index_html = f.read()
with open('dashboard-dokter.html.bak', 'r') as f: doc_html = f.read()

def extract_screen(html, screen_id, is_last=False):
    # Find start
    idx = html.find(f'<div id="{screen_id}"')
    if idx == -1: return None
    
    # Find next screen using standard class "screen " or next id="...-screen"
    if is_last:
        end_idx = html.find('</div>\n    </div>', idx)
        if end_idx == -1: end_idx = len(html)
    else:
        # Find next id="...-screen"
        match = re.search(r'<div id="[a-z]+-screen"', html[idx+1:])
        if match:
            end_idx = idx + 1 + match.start()
        else:
            end_idx = html.find('</div>\n    </div>', idx)
            if end_idx == -1: end_idx = len(html)
            
    div_content = html[idx:end_idx].strip()
    
    # ensure it's active
    div_content = div_content.replace(f'id="{screen_id}" class="screen', f'id="{screen_id}" class="screen active')
    div_content = div_content.replace(f'hidden"', '"')
    
    # remove bottom nav
    bottom_nav_idx = div_content.find('<!-- Bottom Navigation -->')
    if bottom_nav_idx != -1:
        div_content = div_content[:bottom_nav_idx]
        
    bottom_nav_idx2 = div_content.find('<div id="bottom-nav"')
    if bottom_nav_idx2 != -1:
        div_content = div_content[:bottom_nav_idx2]
        
    bottom_nav_idx3 = div_content.find('<div class="absolute bottom-0 left-0 right-0 bg-white border-t border-gray-100')
    if bottom_nav_idx3 != -1:
        div_content = div_content[:bottom_nav_idx3]
        
    div_content = div_content.strip()
    div_content += '\n</div>'
    
    return div_content

screens = {
    'home-screen': 'app/Views/patient/home.php',
    'doctor-screen': 'app/Views/patient/consultation.php',
    'prescription-screen': 'app/Views/patient/prescription.php',
    'history-screen': 'app/Views/patient/history.php',
    'profile-screen': 'app/Views/patient/profile.php',
}

doc_screens = {
    'home-screen': 'app/Views/doctor/dashboard.php',
    'consultation-screen': 'app/Views/doctor/consultation.php',
    'patient-screen': 'app/Views/doctor/patients.php',
    'profile-screen': 'app/Views/doctor/profile.php',
    'chat-screen': 'app/Views/doctor/chat.php',
}

def write_view(path, content, include_bottom=True):
    with open(path, 'w') as f:
        f.write("<?= $this->extend('layouts/main') ?>\n")
        f.write("<?= $this->section('content') ?>\n")
        f.write(content + "\n")
        if include_bottom:
            f.write("<?= $this->include('components/bottom_nav') ?>\n")
        f.write("<?= $this->endSection() ?>\n")

for sid, path in screens.items():
    content = extract_screen(index_html, sid, sid == 'profile-screen')
    if content: write_view(path, content)

for sid, path in doc_screens.items():
    content = extract_screen(doc_html, sid, sid == 'chat-screen')
    if content: write_view(path, content)

login_content = extract_screen(index_html, 'login-screen')
if login_content:
    with open('app/Views/auth/login.php', 'w') as f:
        f.write("<?= $this->extend('layouts/main') ?>\n")
        f.write("<?= $this->section('content') ?>\n")
        f.write(login_content + "\n")
        f.write("<?= $this->endSection() ?>\n")

