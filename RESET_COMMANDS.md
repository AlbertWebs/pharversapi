# Laravel Reset Commands

## Complete System Reset Commands

### 1. Clear All Caches
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan event:clear
```

### 2. Clear All Caches (Single Command)
```bash
php artisan optimize:clear
```

### 3. Reset Configuration Cache
```bash
php artisan config:clear
php artisan config:cache
```

### 4. Reset Route Cache
```bash
php artisan route:clear
php artisan route:cache
```

### 5. Reset View Cache
```bash
php artisan view:clear
php artisan view:cache
```

### 6. Reset Application Cache
```bash
php artisan cache:clear
```

### 7. Reset Database (Fresh Migration)
```bash
php artisan migrate:fresh
```

### 8. Reset Database with Seeding
```bash
php artisan migrate:fresh --seed
```

### 9. Reset Database (Rollback All)
```bash
php artisan migrate:reset
```

### 10. Reset Database (Rollback and Re-run)
```bash
php artisan migrate:refresh
php artisan migrate:refresh --seed
```

### 11. Clear Compiled Files
```bash
php artisan clear-compiled
```

### 12. Clear Logs
```bash
# Windows PowerShell
Remove-Item storage\logs\*.log

# Or manually delete files in storage/logs/
```

### 13. Reset Everything (Complete Reset Script)
```bash
# Clear all caches
php artisan optimize:clear

# Clear compiled files
php artisan clear-compiled

# Fresh migration with seeding
php artisan migrate:fresh --seed

# Rebuild caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 14. Reset Session Files
```bash
# Windows PowerShell
Remove-Item storage\framework\sessions\*

# Or manually delete files in storage/framework/sessions/
```

### 15. Reset Storage (Public Storage)
```bash
# Clear storage/app/public (if using public disk)
# Be careful - this deletes uploaded files!
```

## Quick Reset Script (Windows PowerShell)

Create a file `reset-all.ps1`:

```powershell
Write-Host "Clearing Laravel caches..." -ForegroundColor Yellow
php artisan optimize:clear
php artisan clear-compiled

Write-Host "Clearing logs..." -ForegroundColor Yellow
Remove-Item storage\logs\*.log -ErrorAction SilentlyContinue

Write-Host "Resetting database..." -ForegroundColor Yellow
php artisan migrate:fresh --seed

Write-Host "Rebuilding caches..." -ForegroundColor Yellow
php artisan config:cache
php artisan route:cache
php artisan view:cache

Write-Host "Reset complete!" -ForegroundColor Green
```

Run with: `.\reset-all.ps1`

## Quick Reset Script (Bash/Linux/Mac)

Create a file `reset-all.sh`:

```bash
#!/bin/bash

echo "Clearing Laravel caches..."
php artisan optimize:clear
php artisan clear-compiled

echo "Clearing logs..."
rm -f storage/logs/*.log

echo "Resetting database..."
php artisan migrate:fresh --seed

echo "Rebuilding caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Reset complete!"
```

Run with: `chmod +x reset-all.sh && ./reset-all.sh`

## Most Common Reset Commands

### For Development (Quick Reset)
```bash
php artisan optimize:clear
```

### For Testing (Full Reset)
```bash
php artisan migrate:fresh --seed
php artisan optimize:clear
```

### For Production Issues (Cache Reset)
```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan view:clear
```

## Notes

⚠️ **Warning**: 
- `migrate:fresh` will **DELETE ALL DATA** in your database
- `migrate:reset` will **DELETE ALL TABLES**
- Always backup your database before running these commands in production!

✅ **Safe Commands** (No data loss):
- `optimize:clear` - Only clears caches
- `cache:clear` - Only clears application cache
- `config:clear` - Only clears config cache
- `route:clear` - Only clears route cache
- `view:clear` - Only clears view cache

