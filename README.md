## 概要
COACHTECH 教材 Tutorial 10-5「テスト ハンズオン演習」で作成した成果物です。
- Laravelのデータベーステストを実装しました。ユーザー作成時の保存確認と、メールアドレス重複時の例外発生をテストしています。

## 使用技術
- PHP 8.x
- Laravel 10.x
- PHPUnit（テスト）
- Eloquent / Factory

## 学んだこと
- Feature テストと Unit テストの違いと使い分け
- RefreshDatabase トレイトを使ったテスト用 DB のリセット
- assertDatabaseHas() や expectException() を使ったアサーションの書き方

## 動作確認
- ユーザー作成テストを実行し、データベースにユーザー情報が保存されることを確認しました。また、同一メールアドレスでユーザーを作成した際に QueryException が発生することを確認しました。