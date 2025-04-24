<div>
  <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
    <span class="inline-block bg-primary/10 text-primary font-bold px-2.5 py-1 rounded-md text-sm">
      {entries.length}
    </span>
    <span>Messages</span>
  </h2>
  
  <div class="space-y-1">
    {entries.map((entry, index) => (
      <GuestbookEntry
        key={entry.id}
        name={entry.name}
        message={entry.message}
        date={entry.date}
        className={index === 0 ? "animate-fade-in" : ""}
      />
    ))}
  </div>
</div>
