const notesData = [
  {
    id: 'notes-jT-jjsyz61J8XKiI',
    title: 'Welcome to Notes, Dimas!',
    body: 'Welcome to Notes! This is your first note. You can archive it, delete it, or create new ones.',
    createdAt: '2022-07-28T10:03:12.594Z',
    archived: false,
  },
  {
    id: 'notes-aB-cdefg12345',
    title: 'Meeting Agenda',
    body: 'Discuss project updates and assign tasks for the upcoming week.',
    createdAt: '2022-08-05T15:30:00.000Z',
    archived: false,
  },
  {
    id: 'notes-XyZ-789012345',
    title: 'Shopping List',
    body: 'Milk, eggs, bread, fruits, and vegetables.',
    createdAt: '2022-08-10T08:45:23.120Z',
    archived: false,
  },
  {
    id: 'notes-1a-2b3c4d5e6f',
    title: 'Personal Goals',
    body: 'Read two books per month, exercise three times a week, learn a new language.',
    createdAt: '2022-08-15T18:12:55.789Z',
    archived: false,
  },
  {
    id: 'notes-LMN-456789',
    title: 'Recipe: Spaghetti Bolognese',
    body: 'Ingredients: ground beef, tomatoes, onions, garlic, pasta. Steps:...',
    createdAt: '2022-08-20T12:30:40.200Z',
    archived: false,
  },
  {
    id: 'notes-QwErTyUiOp',
    title: 'Workout Routine',
    body: 'Monday: Cardio, Tuesday: Upper body, Wednesday: Rest, Thursday: Lower body, Friday: Cardio.',
    createdAt: '2022-08-25T09:15:17.890Z',
    archived: false,
  },
  {
    id: 'notes-abcdef-987654',
    title: 'Book Recommendations',
    body: "1. 'The Alchemist' by Paulo Coelho\n2. '1984' by George Orwell\n3. 'To Kill a Mockingbird' by Harper Lee",
    createdAt: '2022-09-01T14:20:05.321Z',
    archived: false,
  },
  {
    id: 'notes-zyxwv-54321',
    title: 'Daily Reflections',
    body: 'Write down three positive things that happened today and one thing to improve tomorrow.',
    createdAt: '2022-09-07T20:40:30.150Z',
    archived: false,
  },
  {
    id: 'notes-poiuyt-987654',
    title: 'Travel Bucket List',
    body: '1. Paris, France\n2. Kyoto, Japan\n3. Santorini, Greece\n4. New York City, USA',
    createdAt: '2022-09-15T11:55:44.678Z',
    archived: false,
  },
  {
    id: 'notes-asdfgh-123456',
    title: 'Coding Projects',
    body: '1. Build a personal website\n2. Create a mobile app\n3. Contribute to an open-source project',
    createdAt: '2022-09-20T17:10:12.987Z',
    archived: false,
  },
  {
    id: 'notes-5678-abcd-efgh',
    title: 'Project Deadline',
    body: 'Complete project tasks by the deadline on October 1st.',
    createdAt: '2022-09-28T14:00:00.000Z',
    archived: false,
  },
  {
    id: 'notes-9876-wxyz-1234',
    title: 'Health Checkup',
    body: 'Schedule a routine health checkup with the doctor.',
    createdAt: '2022-10-05T09:30:45.600Z',
    archived: false,
  },
  {
    id: 'notes-qwerty-8765-4321',
    title: 'Financial Goals',
    body: '1. Create a monthly budget\n2. Save 20% of income\n3. Invest in a retirement fund.',
    createdAt: '2022-10-12T12:15:30.890Z',
    archived: false,
  },
  {
    id: 'notes-98765-54321-12345',
    title: 'Holiday Plans',
    body: 'Research and plan for the upcoming holiday destination.',
    createdAt: '2022-10-20T16:45:00.000Z',
    archived: false,
  },
  {
    id: 'notes-1234-abcd-5678',
    title: 'Language Learning',
    body: 'Practice Spanish vocabulary for 30 minutes every day.',
    createdAt: '2022-10-28T08:00:20.120Z',
    archived: false,
  },
];

let notes = [...notesData];

class AppBar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `<h1>Notes Application</h1>`;
  }
}
customElements.define('app-bar', AppBar);

class NoteForm extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <h2>Tambah Catatan Baru</h2>
      <form id="noteForm">
        <div class="form-group">
          <label for="noteTitle">Judul Catatan</label>
          <input type="text" id="noteTitle" placeholder="Masukkan judul catatan..." required>
        </div>
        <div class="form-group">
          <label for="noteBody">Isi Catatan</label>
          <textarea id="noteBody" placeholder="Tulis catatan Anda di sini..." required></textarea>
        </div>
        <button type="submit" class="btn-submit">Tambah Catatan</button>
      </form>
    `;

    this.querySelector('#noteForm').addEventListener('submit', (e) => {
      e.preventDefault();
      const title = this.querySelector('#noteTitle').value;
      const body = this.querySelector('#noteBody').value;

      const newNote = {
        id: `notes-${Date.now()}`,
        title: title,
        body: body,
        createdAt: new Date().toISOString(),
        archived: false,
      };

      notes.unshift(newNote);
      renderNotes();

      this.querySelector('#noteForm').reset();
    });
  }
}
customElements.define('note-form', NoteForm);

class NoteItem extends HTMLElement {
  set note(data) {
    this._note = data;
    this.render();
  }

  render() {
    const note = this._note;
    const date = new Date(note.createdAt).toLocaleDateString('id-ID', {
      year: 'numeric',
      month: 'long',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit'
    });

    this.innerHTML = `
      <h3>${note.title}</h3>
      <p>${note.body}</p>
      <div class="note-date">${date}</div>
      <div class="note-actions">
        ${note.archived 
          ? `<button class="btn-unarchive" data-id="${note.id}">Kembalikan</button>`
          : `<button class="btn-archive" data-id="${note.id}">Arsipkan</button>`
        }
        <button class="btn-delete" data-id="${note.id}">Hapus</button>
      </div>
    `;

    const archiveBtn = this.querySelector('.btn-archive');
    const unarchiveBtn = this.querySelector('.btn-unarchive');
    const deleteBtn = this.querySelector('.btn-delete');

    if (archiveBtn) {
      archiveBtn.addEventListener('click', () => archiveNote(note.id));
    }

    if (unarchiveBtn) {
      unarchiveBtn.addEventListener('click', () => unarchiveNote(note.id));
    }

    deleteBtn.addEventListener('click', () => deleteNote(note.id));
  }
}
customElements.define('note-item', NoteItem);

function renderNotes() {
  const activeNotesContainer = document.getElementById('activeNotes');
  const archivedNotesContainer = document.getElementById('archivedNotes');

  const activeNotes = notes.filter(note => !note.archived);
  const archivedNotes = notes.filter(note => note.archived);

  if (activeNotes.length === 0) {
    activeNotesContainer.innerHTML = '<div class="empty-state">Tidak ada catatan aktif</div>';
  } else {
    activeNotesContainer.innerHTML = '';
    activeNotes.forEach(note => {
      const noteItem = document.createElement('note-item');
      noteItem.note = note;
      activeNotesContainer.appendChild(noteItem);
    });
  }

  if (archivedNotes.length === 0) {
    archivedNotesContainer.innerHTML = '<div class="empty-state">Tidak ada catatan di arsip</div>';
  } else {
    archivedNotesContainer.innerHTML = '';
    archivedNotes.forEach(note => {
      const noteItem = document.createElement('note-item');
      noteItem.note = note;
      archivedNotesContainer.appendChild(noteItem);
    });
  }
}

function archiveNote(id) {
  const note = notes.find(n => n.id === id);
  if (note) {
    note.archived = true;
    renderNotes();
  }
}

function unarchiveNote(id) {
  const note = notes.find(n => n.id === id);
  if (note) {
    note.archived = false;
    renderNotes();
  }
}

function deleteNote(id) {
  if (confirm('Apakah Anda yakin ingin menghapus catatan ini?')) {
    notes = notes.filter(n => n.id !== id);
    renderNotes();
  }
}

renderNotes();