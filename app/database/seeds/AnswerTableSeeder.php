<?php

class AnswerTableSeeder extends Seeder {

    public function run()
    {
        Answer::create([
            'content' => 'Tiếng Nhật',
            'word_id' => 1,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Người Nhật',
            'word_id' => 1,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tiếng Việt',
            'word_id' => 1,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Người Việt',
            'word_id' => 1,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Hoa',
            'word_id' => 2,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Lá',
            'word_id' => 2,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cây',
            'word_id' => 2,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Cành',
            'word_id' => 2,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Trâu',
            'word_id' => 3,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Bò',
            'word_id' => 3,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Lợn',
            'word_id' => 3,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Người',
            'word_id' => 3,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Chân',
            'word_id' => 4,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tay',
            'word_id' => 4,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Mũi',
            'word_id' => 4,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Mắt',
            'word_id' => 4,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Tay',
            'word_id' => 5,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Chân',
            'word_id' => 5,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Mũi',
            'word_id' => 5,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Mắt',
            'word_id' => 5,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Đẹp',
            'word_id' => 6,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Xấu',
            'word_id' => 6,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Bẩn',
            'word_id' => 6,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Khác',
            'word_id' => 6,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Bơi lội',
            'word_id' => 7,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Đi lại',
            'word_id' => 7,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Chơi',
            'word_id' => 7,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tắm rửa',
            'word_id' => 7,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Đi bộ',
            'word_id' => 8,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Chạy',
            'word_id' => 8,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tập thể dục',
            'word_id' => 8,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Đá bóng',
            'word_id' => 8,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'An toàn',
            'word_id' => 9,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Thú vị',
            'word_id' => 9,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Nguy hiểm',
            'word_id' => 9,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Tuyệt vời',
            'word_id' => 9,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Y tá',
            'word_id' => 10,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Bác sĩ',
            'word_id' => 10,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Hộ lý',
            'word_id' => 10,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Bảo vệ',
            'word_id' => 10,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Hồ',
            'word_id' => 11,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Ao',
            'word_id' => 11,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Sông',
            'word_id' => 11,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Biển',
            'word_id' => 11,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Thang máy',
            'word_id' => 12,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Thang dây',
            'word_id' => 12,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Đường đi',
            'word_id' => 12,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Phố phường',
            'word_id' => 12,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Màu xanh',
            'word_id' => 13,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Màu vàng',
            'word_id' => 13,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Màu lam',
            'word_id' => 13,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Màu đỏ',
            'word_id' => 13,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Bưu điện',
            'word_id' => 14,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Ngân hàng',
            'word_id' => 14,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Nhà ga',
            'word_id' => 14,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Hiệu sách',
            'word_id' => 14,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Phòng học',
            'word_id' => 15,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Nhà bếp',
            'word_id' => 15,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Phòng ăn',
            'word_id' => 15,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Nhà tắm',
            'word_id' => 15,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Hàng ngày',
            'word_id' => 16,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Hàng tháng',
            'word_id' => 16,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Hàng năm',
            'word_id' => 16,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Hàng quý',
            'word_id' => 16,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Cầu thang',
            'word_id' => 17,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Gác xép',
            'word_id' => 17,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cửa chính',
            'word_id' => 17,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cửa sổ',
            'word_id' => 17,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Đẹp',
            'word_id' => 18,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tiện dụng',
            'word_id' => 18,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Rẻ',
            'word_id' => 18,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Đắt',
            'word_id' => 18,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Hàng xóm',
            'word_id' => 19,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Tập thể',
            'word_id' => 19,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Xã hội',
            'word_id' => 19,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Gia đình',
            'word_id' => 19,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Em trai',
            'word_id' => 20,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Em gái',
            'word_id' => 20,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cháu trai',
            'word_id' => 20,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cháu gái',
            'word_id' => 20,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Bác',
            'word_id' => 21,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Chú',
            'word_id' => 21,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Mẹ',
            'word_id' => 21,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Cha',
            'word_id' => 21,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Anh trai',
            'word_id' => 22,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Chị gái',
            'word_id' => 22,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Chị họ',
            'word_id' => 22,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Anh họ',
            'word_id' => 22,
            'correct' => false
        ]);

        Answer::create([
            'content' => 'Chị họ',
            'word_id' => 23,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Anh trai',
            'word_id' => 23,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cháu trai',
            'word_id' => 23,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cháu gái',
            'word_id' => 23,
            'correct' => true
        ]);

        Answer::create([
            'content' => 'Con dâu',
            'word_id' => 24,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Con trai',
            'word_id' => 24,
            'correct' => true
        ]);
        Answer::create([
            'content' => 'Con gái',
            'word_id' => 24,
            'correct' => false
        ]);
        Answer::create([
            'content' => 'Cháu trai',
            'word_id' => 24,
            'correct' => false
        ]);
    }
}
