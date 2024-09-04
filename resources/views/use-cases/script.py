import os

# Получаем текущую директорию
current_directory = os.getcwd()

try:
    # Проходим все файлы в текущей директории
    for filename in os.listdir(current_directory):
        # Проверяем, является ли файл HTML
        if filename.endswith('.html'):
            # Создаем новое имя для файла с расширением .blade.php
            new_filename = filename[:-5] + '.blade.php'
            # Полные пути
            old_file = os.path.join(current_directory, filename)
            new_file = os.path.join(current_directory, new_filename)
            
            # Переименовываем файл
            os.rename(old_file, new_file)
            print(f'Переименован: {filename} -> {new_filename}')

    print('Преобразование завершено. ✅')

except Exception as e:
    print(f'Ошибка: {e}')
